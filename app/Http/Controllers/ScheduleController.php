<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\User;
use App\Siswa;
use App\Absensi;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show($id)
    {
       $jadwal = Jadwal::with('user','kela','mapel')->where('mapel_id', $id)->firstOrFail();

        $kehadirans = Absensi::with('kela')->where('kela_id', $id)->get();

       $siswas = Siswa::with('kela')->where('kela_id', $jadwal->kela_id)->paginate(5);

       return view('teachers.show', compact('jadwal', 'siswas', 'kehadirans'));
    }
}
