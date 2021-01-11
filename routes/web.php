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


	Route::post('/postlogin', 'App\Http\Controllers\AuthController@postlogin');
	

	// Route user oleh Administrator
	Route::get('/list_userAdmin', 'App\Http\Controllers\UserController@list');
	Route::get('/tambah_userAdmin', 'App\Http\Controllers\UserController@index');
	Route::get('/edit_userAdmin/edit/{id}', 'App\Http\Controllers\UserController@edit');
	Route::patch('/editUserProsesAdmin/{id}', 'App\Http\Controllers\UserController@editUserProsesAdmin');

	// Route BPW oleh Administrator
	Route::get('/list_bpwAdmin', 'App\Http\Controllers\BPWController@listAdmin');
	Route::get('/tambah_bpwAdmin', 'App\Http\Controllers\BPWController@index');
	Route::get('/edit_bpwAdmin/edit/{id}', 'App\Http\Controllers\BPWController@edit');
	Route::patch('/editBPWProsesAdmin/{id}', 'App\Http\Controllers\BPWController@editBPWProsesAdmin');
	Route::get('/detail_bpwAdmin/detail/{id}','App\Http\Controllers\BPWController@detailBPWAdmin');

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
	Route::patch('/editTDUPProsesStaf/{id}', 'App\Http\Controllers\TDUPController@editTDUPProsesStaf');

	// Route Izin oleh Staf
	Route::get('/list_izinStaf', 'App\Http\Controllers\IzinController@listStaf');
	Route::get('/edit_izinStaf/edit/{id}', 'App\Http\Controllers\IzinController@edit');
	Route::patch('/editIzinProsesStaf/{id}', 'App\Http\Controllers\IzinController@editIzinProsesStaf');

	// Route LKU oleh Staf
	Route::get('/list_lkuStaf', 'App\Http\Controllers\LKUController@listStaf');
	Route::get('/edit_lkuStaf/edit/{id}', 'App\Http\Controllers\LKUController@edit');
	Route::patch('/editLKUProsesStaf/{id}', 'App\Http\Controllers\LKUController@editLKUProsesStaf');
	


	// Route E-Report BPW oleh Kepala

	// Route E-Report LKU oleh Kepala

	

	// Route BPW oleh BPW
	Route::get('/list_bpwBPW', 'App\Http\Controllers\BPWController@listBPW');
	Route::get('/edit_bpwBPW/edit/{id}', 'App\Http\Controllers\BPWController@edit');
	Route::patch('/editBPWProsesBPW/{id}', 'App\Http\Controllers\BPWController@editBPWProsesBPW');

	// Route TDUP oleh BPW
	Route::get('/list_tdupBPW', 'App\Http\Controllers\TDUPController@listBPW');
	Route::get('/edit_tdupBPW/edit/{id}', 'App\Http\Controllers\TDUPController@edit');
	Route::patch('/editTDUPProsesBPW/{id}', 'App\Http\Controllers\TDUPController@editTDUPProsesBPW');

	// Route Izin oleh BPW
	Route::get('/list_izinBPW', 'App\Http\Controllers\IzinController@listBPW');
	Route::get('/edit_izinBPW/edit/{id}', 'App\Http\Controllers\IzinController@edit');
	Route::patch('/editIzinProsesBPW/{id}', 'App\Http\Controllers\IzinController@editIzinProsesBPW');

	// Route LKU oleh BPW
	Route::get('/list_lkuBPW', 'App\Http\Controllers\LKUController@listBPW');
	Route::get('/edit_lkuBPW/edit/{id}', 'App\Http\Controllers\LKUController@edit');
	Route::patch('/editLKUProsesBPW/{id}', 'App\Http\Controllers\LKUController@editLKUProsesBPW');



Route::resource('bpw', 'App\Http\Controllers\BPWController');
Route::resource('tdup', 'App\Http\Controllers\TDUPController');
Route::resource('izin', 'App\Http\Controllers\IzinController');
Route::resource('lku', 'App\Http\Controllers\LKUController');
Route::resource('user', 'App\Http\Controllers\UserController');
















// Route::group(['middleware' => 'auth'], function() {
// 	Route::get('/awal', 'App\Http\Controllers\AdminController@index');
// });
// Auth::routes(); 


// Route::get('/regis', 'App\Http\Controllers\InsertRegister@insert');



// Route::get('/logout', 'App\Http\Controllers\AuthController@logout');





// Route::get('/lte', function () {
//     return view('adminLTE');
// });
// Route::get('/master', function () {
//     return view('layout.master');
// });
// Route::get('/adminis', function () {
//     return view('layout.dashboard_admin');
// });
// Route::get('/blank', function () {
//     return view('layout.blank');
// });
// Route::get('/edit', function () {
//     return view('bpw.edit_bpwAdmin');
// });

