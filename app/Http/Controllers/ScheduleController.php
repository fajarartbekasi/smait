<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\User;
use App\Siswa;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function show($id)
    {
       $jadwal = Jadwal::with('user','kela','mapel')->findOrFail($id);

       $siswas = Siswa::with('kela')->where('kela_id', $jadwal->kela_id)->get();

       return view('teachers.show', compact('jadwal', 'siswas'));
    }
}
