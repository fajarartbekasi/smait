<?php

namespace App\Http\Controllers\Nilai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlanganController extends Controller
{
    public function index()
    {
        return view('nilai.ulangan.guru.index');
    }
    public function create()
    {
        return view('nilai.ulangan.guru.create');
    }
}
