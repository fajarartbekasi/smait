<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = User::whereHas('roles', function($role){
                $role->where('roles.name','=','guru');
        })->paginate(5);

        return view('teachers.index',compact('gurus'));
    }
    public function create()
    {
        return view('teachers.create');
    }
}
