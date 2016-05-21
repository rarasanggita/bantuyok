<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $table = 'sub_comments';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = [''];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function thread(){
        return $this->belongsTo('App\Thread','thread_id','id');
    }
}
