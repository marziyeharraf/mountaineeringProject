<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
class Post extends Model
{
    protected $fillable = ['title','image', 'content', 'date', 'location', 'count', 'time', 'age','user_id'];
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag','post_tag','post_id','tag_id')->withTimestamps();
    }
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
