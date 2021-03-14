<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangkelasController extends Controller
{
    public function index()
    {
        return view('kelas.index');
    }
    public function create()
    {
        return view('kelas.create');
    }
}
