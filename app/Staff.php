<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    protected $dates = ['created_at','updated_at'];
    protected $fillable = ['name','username','address','phone','photo','password'];

    public function donates(){
        return $this->hasMany('App\Donate','staff_id','id');
    }

}
