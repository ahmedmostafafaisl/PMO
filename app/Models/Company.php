<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'mobile',
        'establish',
        'website',
        'location',
        'emp_number',
        'profile',
        'image',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_companies');
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}