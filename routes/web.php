<?php

Route::get('/', function () {
	// echo "hello world, now : ".date('Y-m-d H:i:s');
    return view('welcome');
});

Route::get('/hello','HelloController@index')->name('hello.index');

Route::get('blank',function(){
	return view('blank');
	})->name('blank');

Route::get('chart',function(){
	return view('chart');
})->name('chart');

Route::resource('tugas', 'TugasController');


Route::get('customer','SakilaController@customer')->name('customer');
Route::get('create','SakilaController@create')->name('create');
Route::get('update','SakilaController@update')->name('update');
Route::get('delete','SakilaController@delete')->name('delete');
Route::get('join_store_to_customer'.'TestController@join_store');
?>