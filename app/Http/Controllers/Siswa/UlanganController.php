<?php

namespace App\Http\Controllers\Siswa;

use App\Ulangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlanganController extends Controller
{

    public function index($id)
    {
        $ulangans = Ulangan::with('user','kela','guru','mapel')->where('user_id', $id)->get();

        return view('nilai.ulangan.guru.detailNilai.show', compact('ulangans'));
    }
}
