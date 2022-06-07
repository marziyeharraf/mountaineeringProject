<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newscomment extends Model
{
    protected $fillable = ['name','email','message','post_id','status'];
    use HasFactory;
}
