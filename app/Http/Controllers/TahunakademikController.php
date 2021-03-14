<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahunakademikController extends Controller
{
    public function index()
    {
        return view('tahunakademik.index');
    }
    public function create()
    {
        return view('tahunakademik.create');
    }
}
