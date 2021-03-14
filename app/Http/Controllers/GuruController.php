<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('teachers.index');
    }
    public function create()
    {
        return view('teachers.create');
    }
}
