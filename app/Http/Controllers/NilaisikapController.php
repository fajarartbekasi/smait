<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaisikapController extends Controller
{
    public function index()
    {
        return view('nilai.sikap.index');
    }
}
