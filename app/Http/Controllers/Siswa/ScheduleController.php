<?php

namespace App\Http\Controllers\Siswa;

use App\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ScheduleController extends Controller
{
    public function show($id)
    {
        $mapels = Jadwal::findOrFail($id);


        return view('students.show', compact('mapels'));
    }
}
