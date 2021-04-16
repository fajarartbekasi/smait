<?php

namespace App\Http\Controllers;
use Auth;
use App\Guru;
use Illuminate\Http\Request;

class UlanganController extends Controller
{
    public function index()
    {
        $data = [
            'gurus'     => Guru::where('user_id', Auth::user()->id)->first(),
            'nilais'    => Guru::where('user_id', Auth::user()->id)->first(),
        ];
        return view('nilai.ulangan.index');
    }
}
