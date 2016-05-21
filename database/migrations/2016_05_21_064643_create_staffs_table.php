<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!(Schema::hasTable('staffs'))) {
            Schema::create('staffs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('username')->unique();
                $table->string('address');
                $table->string('phone');
                $table->string('photo');
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
