<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('students.index');
    }
    public function create()
    {
        return view('students.create');
    }
}
