<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Absensi;
use Illuminate\Http\Request;

class AbsensisiswaController extends Controller
{
    public function create($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('absensi.siswa.create', compact('siswa'));
    }
    public function store(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

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
