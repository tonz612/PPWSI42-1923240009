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
    return view('welcome');
});

Route::get('/halo', function(){
    return "halo semua";
});

//mengirim data ke view
Route::get("/hallo", function(){
    $data = ['nama' => 'Toni Saputra', 'npm' => '1923240009', 'alamat' => 'Palembang'];
    return view("hallo", $data);
});

//menerima data/parameter dan menampilkannya di view
Route::get("/kenalan/{nama}/{npm}", function($nama, $npm){
    $data = ['nama' => $nama, 'npm' => $npm];
    return view("hallo", $data);
});

Route::get('/prodi', [ProdiController::class, 'index']);

Route::get('/mahasiswa/insert',[MahasiswaController::class,'insert']);
Route::get('/mahasiswa/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/delete',[MahasiswaController::class,'delete']);
Route::get('/mahasiswa/select',[MahasiswaController::class,'select']);