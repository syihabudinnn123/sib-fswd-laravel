<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function tambah(){
        return view('tambah');
    }

    public function login(){
        return view('login');
    }

    public function ubah(){
        return view('ubah');
    }
}
