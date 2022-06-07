<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akhbar extends Model
{
    protected $fillable = ['title','image','content','user_id','date'];
    use HasFactory;
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}

