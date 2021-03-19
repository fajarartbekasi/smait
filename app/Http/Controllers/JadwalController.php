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

        $jadwals = Jadwal::all();

        foreach($jadwals as $jadwal){
            dd(json_encode($jadwal->mapel_id));
        }
    }
    public function create()
    {
        $data = [
            'mapels'   => Mapel::all(),
            'kelas'    => Kela::all(),
            'jurusans' => Jurusan::all(),
        ];
        return view('jadwal.create', $data);
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'jurusan_id'    => 'required',
            'mapel_id'      => 'required',
            'kela_id'       => 'required',
            'jam_awal'      => 'required',
            'jam_akhir'     => 'required',
        ]);

        $jadwal = Jadwal::create([
            'jurusan_id'    => $request->input('jurusan_id'),
            'mapel_id'      => $request->input('mapel_id'),
            'kela_id'       => $request->input('kela_id'),
            'jam_awal'      => $request->input('jam_awal'),
            'jam_akhir'     => $request->input('jam_akhir'),
        ]);


        return redirect()->back()->with([
            'success' => 'Jadwal pelajaran telah dibuat terimakasih'
        ]);
    }
}
