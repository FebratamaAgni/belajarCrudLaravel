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

    // untuk menampilkan halaman edit data pegawai
    public function updatepegawai($id){
        $data = employee::find($id);
        return view('updatepegawai', compact('data'));
    }

    // untuk fungsi edit data pegawai(update)
    public function updatedata(Request $request, $id){
        $data = employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Pegawai Berhasil di Update');
    }


}
