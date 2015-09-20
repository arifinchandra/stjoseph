<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*

Route::get('/', function () {
    return view('welcome');
});

*/

Route::model('katForum', 'stjo\Model\ForumKategori');

Route::get('/', 'PagesController@index');
Route::get('login', 'UserController@loginForm');

Route::get('register', 'UserController@registerFirst');
Route::get('pengumumanBaru/{jumlah}', 'PengumumanController@hilightPengumuman');
//$router->resource('pengumuman','PengumumanController');
//Berita
//Route::get('berita','BeritaController@index');

//Forum
Route::get('forum/manKat', 'ForumController@showManKat');
Route::post('forum/manKat', 'ForumController@simpanKategori');
Route::post('forum/manKat/edit/{id}', 'ForumController@simpanKategori');
Route::get('forum/manKat/edit/{id}', 'ForumController@editKategori');


//pengumuman
get('pengumuman/input', 'PengumumanController@showInputPengumuman');


//Registrasi
get('user/reg1', 'UserController@showRegFormOne');

Route::get('{foo}', function($foo) {


	return view($foo);
});