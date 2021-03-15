<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function index()
    {
        $walas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','walas');
        })->paginate(5);

        return view('walas.index', compact('walas'));
    }
}
