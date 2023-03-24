<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function special()
    {
        return $this->belongsTo(Spcial::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'categories_companies');
    }
}
