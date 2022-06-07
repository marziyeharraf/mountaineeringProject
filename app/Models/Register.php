<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['name', 'family', 'age', 'phonenumber', 'phonenumberfamily', 'gender', 'address','explain'];
    use HasFactory;
}
