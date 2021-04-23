<?php

namespace App\Http\Controllers\Nilai;

use App\kela;
use App\Siswa;
use App\Jadwal;
use App\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RaportController extends Controller
{
    public function index()
    {
        $kelas = Kela::with('siswas')->where('user_id', Auth::user()->id)->get();

        return view('nilai.raport.index',compact('kelas'));
    }
    public function create($id)
    {
        $siswa = Siswa::findOrFail($id);

        $jadwals = Jadwal::with('mapel','kela')->where('kela_id', $siswa->kela_id)->get();

        return view('nilai.raport.create',compact('siswa','jadwals'));
    }
    public function store(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $this->validate($request, [
            'mapel_id'             => 'required',
            'guru_id'              => 'required',
            'k1_k2'                => 'required',
            'k3'                   => 'required',
            'k4'                   => 'required',
            'k1_k2_predikat'       => 'required',
            'k3_predikat'          => 'required',
            'k4_predikat'          => 'required',
            's'                    => 'required',
            'i'                    => 'required',
            'a'                    => 'required',
        ]);

        $raport = Raport::create([
            'user_id'              => $siswa->user_id,
            'kela_id'              => $siswa->kela_id,
            'mapel_id'             => $request->input('mapel_id'),
            'guru_id'              => $request->input('guru_id'),
            'k1_k2'                => $request->input('k1_k2'),
            'k3'                   => $request->input('k3'),
            'k4'                   => $request->input('k4'),
            'k1_k2_predikat'       => $request->input('k1_k2_predikat'),
            'k3_predikat'          => $request->input('k3_predikat'),
            'k4_predikat'          => $request->input('k4_predikat'),
            's'                    => $request->input('s'),
            'i'                    => $request->input('i'),
            'a'                    => $request->input('a'),
        ]);

        return redirect()->back();

    }
    public function show($id)
    {
        $raports = Raport::findOrFail($id);

        $nilais = Raport::with('user','mapel','kela','guru')->where('user_id',$raports->user_id)->get();

        return view('nilai.raport.show', compact('raports','nilais'));
    }
}
