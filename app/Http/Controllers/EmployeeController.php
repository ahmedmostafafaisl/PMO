<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use App\Models\Special;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class EmployeeController extends Controller
{

    public function index()
    {
        $specials = Special::all();
        // dd($specials);
        return view('index', ['specials' => $specials]);
    }
    public function login()
    {
        return view('dashboard.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('user', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


    public function store(Request $request)
    {


        $company  = new Company;
        $company->name = $request->comp_name;
        $company->address = $request->comp_address;
        $company->phone = $request->comp_phone;
        $company->mobile = $request->comp_mobile;
        $company->establish = $request->comp_established;
        $company->website = $request->comp_website;
        $company->location = $request->comp_location;
        $company->emp_number = $request->comp_number_of_emp;
        $company->location = $request->comp_profile;
        $company->category_id = $request->category;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = 'images/company/' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/company/', $fileName);
            $company->comp_logo = $fileName;
            $company->save();
        };



        $company = Company::create([
            'name' => $request->comp_name,
            'address' => $request->comp_address,
            'phone' => $request->comp_phone,
            'mobile' => $request->comp_mobile,
            'establish' => $request->comp_established,
            'website' => $request->comp_website,
            'location' => $request->comp_location,
            'emp_number' => $request->comp_number_of_emp,
            'image' => $request->comp_logo,
            'profile' => $request->comp_profile,

        ]);

        $company->categories()->attach($request->category);


        $emp = Employee::create([
            'company_id' => $company->id,
            'name' => $request->emp_name,
            'title' => $request->title,
            'email' => $request->emp_email,
            'mobile' => $request->mobile,
            'date_of_emp' => $request->emp_since,
        ]);

        $user = User::create([
            'name' => $request->user_name,
            'password' => bcrypt($request->pass),
        ]);

        return view('home');
    }
}
