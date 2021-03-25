<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PredikatController extends Controller
{
    public function index()
    {
        return view('nilai.predikat.index');
    }
}
