<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = employee::all();

        return view('pegawai', compact('data'));
    }
}
