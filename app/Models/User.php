<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $user = 'users';
    // public $newAttribute = 'new attribute';

    public function url()
    {
    	return 'http:://localhost/user/'.$this->ID_USER;
    }
}
