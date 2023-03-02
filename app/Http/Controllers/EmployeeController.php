<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // untuk menampilkan semua data yang ada di database
    public function index(){
        $data = employee::all();

        return view('pegawai', compact('data'));
    }

    // untuk menampilkan halaman tambah data pegawai
    public function tambahpegawai(){
        return view('tambahdata');
    }

    // untuk fungsi tambah data pegawai(create)
    public function insertdata(Request $request){        
        employee::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Pegawai Berhasil di Tambahkan');
    }


}
