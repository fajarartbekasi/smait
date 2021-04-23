<?php

namespace App\Http\Controllers;

use App\User;
use App\Absensi;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {

        $absensis = Absensi::with('user')->paginate(5);

        return view('absensi.index', compact('absensis'));
    }
    public function create()
    {

        return view('absensi.guru.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_id'   => 'required',
            'absen'     => 'required',
        ]);

        $absen = Absensi::create([
            'user_id'   => $request->input('user_id'),
            'absen'     => $request->input('absen'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih telah melakukan absen untuk hari ini'
        ]);
    }
}
