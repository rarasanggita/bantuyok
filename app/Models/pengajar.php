<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengajar extends Model
{
    protected $pengajar = 'pengajar';
    // public $newAttribute = 'new attribute';

    public function url()
    {


		// DB::table('pengajar')
		//             ->join('users', 'pengajar.FK_PENG_USER', '=', 'users.id')
		//             ->select('users.id', 'users.NAMA_USER', 'users.ALAMAT_USER', 'users.NO_USER','users.FOTO_USER')
		//             ->get();


		// DB::table('users')
		//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
		//             ->join('orders', 'users.id', '=', 'orders.user_id')
		//             ->select('users.id', 'contacts.phone', 'orders.price')
		//             ->get();

    	return 'http:://localhost/user/'.$this->ID_USER;
    }
}
