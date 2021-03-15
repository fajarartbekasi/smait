<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Kela;
use App\Mapel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function create()
    {
        $data = [
            'mapels'   => Mapel::all(),
            'kelas'    => Kela::all(),
            'jurusans' => Jurusan::all(),
        ];
        return view('jadwal.create', $data);
    }
}
