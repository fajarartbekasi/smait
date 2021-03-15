<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','siswa');
        })->paginate(5);

        return view('students.index', compact('siswas'));
    }
    public function create()
    {
        return view('students.create');
    }
}
