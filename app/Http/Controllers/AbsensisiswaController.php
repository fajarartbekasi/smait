<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;

class AbsensisiswaController extends Controller
{
    public function create()
    {
        return view('absensi.siswa.create');
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
