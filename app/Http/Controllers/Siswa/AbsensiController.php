<?php

namespace App\Http\Controllers\Siswa;

use App\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::where('user_id', Auth::user()->id)->paginate(5);

        return view('students.absensi.index', compact('absensis'));
    }
}
