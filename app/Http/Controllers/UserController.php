<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // public function login(Request $request)

    // {
    //     $validator = Validator::make($request->all(), [
    //         'user'    => 'required',
    //         'password' => 'required'
    //     ]);


    //     if ($validator->fails()) {
    //         return  $this->setCode(422)->setData(null)->setMessage($validator->errors()->first())->send();
    //     }
    //     $credentials = $request->only($username, 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user             = Auth::user();
    //         $client = Client::where('user_id', $user->id)->first();
    //         if ($request->device_token != null) {
    //             $client->update(
    //                 [
    //                     'device_token' => $request->device_token,
    //                 ]
    //             );
    //         }
    //         $success['token'] = $user->createToken('accessToken')->accessToken;
    //         return  $this->setCode(200)->setData(["user" => $user, "token" => $success['token']])->setMessage('You are successfully logged in.')->send();
    //     } else {
    //         return  $this->setCode(400)->setData(null)->setMessage('Unauthorised', ['error' => 'Unauthorised'])->send();
    //     }
    // }
}
