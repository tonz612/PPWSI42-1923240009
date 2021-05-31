<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/dosen', function(){
    return view('dosen');
});

Route::get('/dosen/index', function(){
    return view('dosen.index');
});

Route::get('/falkutas', function(){
    //return view('falkutas.index', ["ilkom" => "Falkutas Ilmu Komputer Dan Rekayasa"]);
    //return view('falkutas.index', ["falkutas" => ["Falkutas Ilmu Komputer Dan Rekayasa", "Falkutas Ilmu Ekonomi"]]);
    //return view('falkutas.index')->with("falkutas", ["Falkutas Ilmu Komputer Dan Rekayasa", "Falkutas Ilmu Ekonomi"]);

    $kampus = "Universitas Multi Data Palembang";

    // $falkutas = [];
    $falkutas = ["Falkutas Ilmu Komputer Dan Rekayasa", "Falkutas Ilmu Ekonomi"];
    return view('falkutas.index', compact('falkutas', 'kampus'));
});

Route::get('/mahasiswa/insert',[MahasiswaController::class,'insert']);
Route::get('/mahasiswa/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/delete',[MahasiswaController::class,'delete']);
Route::get('/mahasiswa/select',[MahasiswaController::class,'select']);

Route::get('/mahasiswa/insert-qb', [MahasiswaController::class, 'insertQb']);
Route::get('/mahasiswa/update-qb', [MahasiswaController::class, 'updateQb']);
Route::get('/mahasiswa/delete-qb', [MahasiswaController::class, 'deleteQb']);
Route::get('/mahasiswa/select-qb', [MahasiswaController::class, 'selectQb']);

Route::get('/mahasiswa/insert-elq', [MahasiswaController::class, 'insertElq']);
Route::get('/mahasiswa/update-elq', [MahasiswaController::class, 'updateElq']);
Route::get('/mahasiswa/delete-elq', [MahasiswaController::class, 'deleteElq']);
Route::get('/mahasiswa/select-elq', [MahasiswaController::class, 'selectElq']);
