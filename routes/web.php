<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KadNamaController;
use App\Http\Controllers\About;
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

//Kad Nama Staf
Route::get('/kadNama', 'KadNamaController@senaraiKadNama')->name('kadNamaStaf.senaraiKadNama');
Route::get('/kadNama/tambahKadNama', 'KadNamaController@tambahKadNama')->name('kadNamaStaf.tambahKadNama');

//Kad Nama Urusetia
Route::get('/senaraiKadNama', 'KadNamaController@pemohonKadNama')->name('kadNamaUrusetia.pemohonKadNama');
Route::get('/senaraiKadNama/kemaskiniKadNama', 'KadNamaController@kemaskiniKadNama')->name('kadNamaUrusetia.kemaskiniKadNama');

Route::get('kadNamaA', 'About@senaraiKadNama')->name('kadNamaStaf.senaraiKadNamaA');
Route::get("kadNamas", [About::class, 'senaraiKadNama']);
Route::get("/Urusetia/{id}/show", [About::class, 'edit']);
Route::get("/listPeranan", [About::class, 'senaraiPeranan']);