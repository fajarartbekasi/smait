<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlanganController extends Controller
{
    public function index()
    {
        return view('nilai.ulangan.index');
    }
}
