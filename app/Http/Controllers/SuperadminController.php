<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class SuperadminController extends Controller
{
    public function home()
    {
        return view('superadmin/home');
    }
    public function pengajuan()
    {
        return view('superadmin/pendaftaran');
    }
    public function proposal()
    {
        return view('superadmin/risalah');
    }
    public function approval()
    {
        return view('superadmin/approval');
    }
   
}

