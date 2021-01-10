<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin')->middleware('LevelUser');
	

	// Route user oleh Administrator
	Route::get('/list_userAdmin', 'App\Http\Controllers\UserController@list');
	Route::get('/tambah_userAdmin', 'App\Http\Controllers\UserController@index');
	Route::get('/edit_userAdmin/edit/{id}', 'App\Http\Controllers\UserController@edit');
	Route::patch('/editProsesAdmin/{id}', 'App\Http\Controllers\UserController@editProsesAdmin');

	// Route BPW oleh Administrator
	Route::get('/list_bpwAdmin', 'App\Http\Controllers\BPWController@listAdmin');
	Route::get('/tambah_bpwAdmin', 'App\Http\Controllers\BPWController@index');
	Route::get('/edit_bpwAdmin/edit/{id}', 'App\Http\Controllers\BPWController@edit');
	Route::patch('/editProsesAdmin/{id}', 'App\Http\Controllers\BPWController@editProsesAdmin');

	// Route TDUP oleh Administrator
	Route::get('/list_tdupAdmin', 'App\Http\Controllers\TDUPController@listAdmin');

	// Route Izin oleh Administrator
	Route::get('/list_izinAdmin', 'App\Http\Controllers\TDUPController@listAdmin');

	// Route LKU oleh Administrator
	Route::get('/list_lkuAdmin', 'App\Http\Controllers\TDUPController@listAdmin');



	// Route BPW oleh Staf
	Route::get('/list_bpwStaf', 'App\Http\Controllers\BPWController@listStaf');

	// Route TDUP oleh Staf
	Route::get('/list_tdupStaf', 'App\Http\Controllers\TDUPController@listStaf');
	Route::get('/edit_tdupStaf/edit/{id}', 'App\Http\Controllers\TDUPController@edit');
	Route::patch('/editProsesStaf/{id}', 'App\Http\Controllers\TDUPController@editProsesStaf');

	// Route Izin oleh Staf
	Route::get('/list_izinStaf', 'App\Http\Controllers\IzinController@listStaf');
	Route::get('/edit_izinStaf/edit/{id}', 'App\Http\Controllers\IzinController@edit');
	Route::patch('/editProsesStaf/{id}', 'App\Http\Controllers\IzinController@editProsesStaf');

	// Route LKU oleh Staf
	Route::get('/list_lkuStaf', 'App\Http\Controllers\LKUController@listStaf');
	Route::get('/edit_lkuStaf/edit/{id}', 'App\Http\Controllers\LKUController@edit');
	Route::patch('/editProsesStaf/{id}', 'App\Http\Controllers\LKUController@editProsesStaf');
	


	// Route E-Report BPW oleh Kepala

	// Route E-Report LKU oleh Kepala

	

	// Route BPW oleh BPW
	Route::get('/list_bpwBPW', 'App\Http\Controllers\BPWController@listBPW');
	Route::get('/edit_bpwBPW/edit/{id}', 'App\Http\Controllers\BPWController@edit');
	Route::patch('/editProsesBPW/{id}', 'App\Http\Controllers\BPWController@editProsesBPW');

	// Route TDUP oleh BPW
	Route::get('/list_tdupBPW', 'App\Http\Controllers\TDUPController@listBPW');
	Route::get('/edit_tdupBPW/edit/{id}', 'App\Http\Controllers\TDUPController@edit');
	Route::patch('/editProsesBPW/{id}', 'App\Http\Controllers\TDUPController@editProsesBPW');

	// Route Izin oleh BPW
	Route::get('/list_izinBPW', 'App\Http\Controllers\IzinController@listBPW');
	Route::get('/edit_izinBPW/edit/{id}', 'App\Http\Controllers\IzinController@edit');
	Route::patch('/editProsesBPW/{id}', 'App\Http\Controllers\IzinController@editProsesBPW');

	// Route LKU oleh BPW
	Route::get('/list_lkuBPW', 'App\Http\Controllers\LKUController@listBPW');
	Route::get('/edit_lkuBPW/edit/{id}', 'App\Http\Controllers\LKUController@edit');
	Route::patch('/editProsesBPW/{id}', 'App\Http\Controllers\LKUController@editProsesBPW');



















Route::group(['middleware' => 'auth'], function() {
	Route::get('/awal', 'App\Http\Controllers\AdminController@index');
});
Auth::routes(); 


Route::get('/regis', 'App\Http\Controllers\InsertRegister@insert');
Route::resource('bpw', 'App\Http\Controllers\BPWController');



Route::get('/logout', 'App\Http\Controllers\AuthController@logout');


Route::resource('tdup', 'App\Http\Controllers\TDUPController');
Route::resource('izin', 'App\Http\Controllers\IzinController');
Route::resource('lku', 'App\Http\Controllers\LKUController');
Route::resource('users', 'App\Http\Controllers\UsersController');



Route::get('/lte', function () {
    return view('adminLTE');
});
Route::get('/master', function () {
    return view('layout.master');
});
Route::get('/adminis', function () {
    return view('layout.dashboard_admin');
});
Route::get('/blank', function () {
    return view('layout.blank');
});
Route::get('/edit', function () {
    return view('bpw.edit_bpwAdmin');
});

