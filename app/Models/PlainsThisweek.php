<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlainsThisweek extends Model
{
    protected $fillable = ['title','place','date','time','countplains','averageplains'];
    use HasFactory;
}
