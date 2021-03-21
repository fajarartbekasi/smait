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
    public function edit($id)
    {
       $jadwal = Jadwal::findOrFail($id);
       $kelas = Kela::all();
       $mapels = Mapel::all();

       return view('jadwals.edit', compact(['jadwal','kelas','mapels']));
    }
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->hari       = $request->input('hari');
        $jadwal->jam_awal   = $request->input('jam_awal');
        $jadwal->jam_akhir  = $request->input('jam_akhir');
        $jadwal->mapel_id   = $request->input('mapel_id');
        $jadwal->kela_id    = $request->input('kela_id');

        $jadwal->save();

        return redirect()->back()->with(['success','Jadwal berhasil di ubah']);
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
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();

        return redirect()->back()->with([
            'success' => 'Jadwal berhasil di hapus'
        ]);

    }
}
