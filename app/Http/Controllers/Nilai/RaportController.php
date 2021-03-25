<?php

namespace App\Http\Controllers\Nilai;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RaportController extends Controller
{
    public function index()
    {
        return view('nilai.raport.entry.index');
    }
}
