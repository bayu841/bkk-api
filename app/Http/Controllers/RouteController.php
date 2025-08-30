<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function daftarlowongan()
    {
        return view('daftarlowongan');
    }
    public function detaillowongan()
    {
        return view('detaillowongan');
    }
    public function treacer()
    {
        return view('tracerstudy');
    }
    public function survei()
    {
        return view('survei');
    }
    public function form()
    {
        return view('surveiform');
    }

}
