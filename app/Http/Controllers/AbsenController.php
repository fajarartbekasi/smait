<?php

namespace App\Http\Controllers;

use App\User;
use App\Guru;
use App\Absensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {

        $teachers = Absensi::with('guru.user')->whereNotNull('guru_id')->get();

        return view('absensi.index', compact('teachers'));
    }
    public function create()
    {

        return view('absensi.guru.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'guru_id'     => 'required',
            'absen'     => 'required',
        ]);

        $absen = Absensi::create([
            'guru_id'   => $request->input('guru_id'),
            'absen'     => $request->input('absen'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih telah mengisi absensi guru'
        ]);
    }
}
