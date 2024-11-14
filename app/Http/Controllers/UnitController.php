<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{

    public function home2()
    {
        return view('unit/home2');
    }
    public function pendaftaran2()
    {
        return view('unit/pendaftaran2');
    }
    public function risalah2()
    {
        return view('unit/risalah2');
    }
    public function approval2()
    {
        return view('unit/approval2');
    }
    public function timetable()
    {
        return view('unit/timetable');
    }
    public function qcdsmpe()
    {
        return view('unit/qcdsmpe');
    }
}

