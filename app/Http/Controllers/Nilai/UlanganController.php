<?php

namespace App\Http\Controllers\Nilai;

use App\Kela;
use App\Siswa;
use App\Ulangan;
use App\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UlanganController extends Controller
{
    public function index()
    {
        $kelas = Kela::where('user_id', Auth::user()->id)->get();

        return view('nilai.ulangan.guru.index', compact('kelas'));
    }
    public function create($id)
    {

        $siswa = Siswa::findOrFail($id);
        $jadwals = Jadwal::with('mapel','kela')->where('user_id', Auth::user()->id)->get();

        return view('nilai.ulangan.guru.create', compact('siswa', 'jadwals'));
    }
    public function store(Request $request, $id)
    {

        $this->validate($request, [
            'user_id'   => 'required',
            'kela_id'   => 'required',
            'guru_id'   => 'required',
            'mapel_id'  => 'required',
            'ulh_1'     => 'required',
            'ulh_2'     => 'required',
            'ulh_3'     => 'required',
            'uts'       => 'required',
            'uas'       => 'required',
        ]);

        $ulangan = Ulangan::create([
            'user_id'   => $request->input('user_id'),
            'kela_id'   => $request->input('kela_id'),
            'guru_id'   => $request->input('guru_id'),
            'mapel_id'  => $request->input('mapel_id'),
            'ulh_1'     => $request->input('ulh_1'),
            'ulh_2'     => $request->input('ulh_2'),
            'ulh_3'     => $request->input('ulh_3'),
            'uts'       => $request->input('uts'),
            'uas'       => $request->input('uas'),
        ]);

        return redirect()->back()->with(['success'=>'Terimakasih telah mengisi nilai ulangan']);
    }
    public function show($id)
    {
        $kelas = Kela::findOrFail($id);
        $siswas = Siswa::where('kela_id', $id)->get();

        return view('nilai.ulangan.guru.show', compact('siswas', 'kelas'));
    }
}
