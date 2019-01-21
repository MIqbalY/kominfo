<?php
use App\Datapegawai;
use App\Daftarnilai;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PostController@create')->name('home');
Route::get('/post/prioritas', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/store', 'PostController@store');
Route::post('/post/simpan/{nip}', 'PostController@simpan');
Route::get('/post/prioritas/{id}', 'PostController@prioritas');
Route::get('/post/rekap', 'PostController@rekap');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::get('/post/edit2/{id}', 'PostController@edit2');
Route::put('/post/update/{id}', 'PostController@update');
Route::put('/post/update2/{id}', 'PostController@update2');
Route::delete('/post/destroy/{id}', 'PostController@destroy');
Route::get('/post/cari', 'PostController@search');

