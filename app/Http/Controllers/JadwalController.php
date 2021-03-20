<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Kela;
use App\Mapel;
use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    public function index()
    {

        $jadwals = Jadwal::with('kela')->get();

        return view('jadwals.index', compact('jadwals'));

    }
    public function create()
    {
        $data = [
            'mapels'   => Mapel::all(),
            'kelas'    => Kela::all(),
        ];
        return view('jadwals.create', $data);
    }
    public function show($id)
    {
        $kelas = Kela::where('id', $id)->firstOrFail();

        $shows = Kela::with('jadwals')->orderBy('id', $id)->get();

       return view('jadwals.filterKelas.index', compact(['shows','kelas']));
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'hari'           => 'required',
            'jam_awal'       => 'required',
            'jam_akhir'      => 'required',
            'mapel_id'       => 'required',
            'kela_id'        => 'required',
        ]);

        $jadwal = Jadwal::create([
            'hari'          => $request->input('hari'),
            'jam_awal'      => $request->input('jam_awal'),
            'jam_akhir'      => $request->input('jam_akhir'),
            'mapel_id'      => $request->input('mapel_id'),
            'kela_id'       => $request->input('kela_id'),
        ]);


        return redirect()->back()->with([
            'success' => 'Jadwal pelajaran telah dibuat terimakasih'
        ]);
    }
}
