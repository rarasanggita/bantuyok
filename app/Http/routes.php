<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('bantuinyok','MainController@home');
Route::get('bantuinyok/ajar','Lecture@ajar');

// raras
Route::get('bantuinyok/profile', 'Profile@profile');
Route::get('bantuinyok/thread', 'Thread@thread');
Route::get('bantuinyok/form_thread', 'Thread@thread');

// VANIA
Route::get('bantuinyok/signup','User@signup');
Route::get('bantuinyok/petugas','Staff@petugas');
Route::post('bantuinyok/signup','User@signupvalidate');
Route::post('login','User@loginvalidation');
