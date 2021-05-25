<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswas (npm, nama_mahasiswa, tempat_lahir, tanggal_lahir, alamat, created_at)
        values (?, ?, ?, ?, ?, ?)', ['1923240009' , 'Toni' , 'Palembang' , '2001-09-19' , 'Jl. Sako' , now()]);
        dump($result);
    }
}
