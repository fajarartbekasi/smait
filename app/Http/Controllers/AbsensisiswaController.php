<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Absensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AbsensisiswaController extends Controller
{
    public function index($id)
    {

        $students = Absensi::where('siswa_id', Auth::user()->id)->paginate(5);

        return view('students.absensi.siswa.index', compact('students'));
    }
    public function create($id)
    {
        $siswa = Siswa::where('user_id',$id)->first();

        return view('absensi.siswa.create', compact('siswa'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'siswa_id'     => 'required',
            'kela_id'     => 'required',
            'absen'     => 'required',
        ]);

        $absen = Absensi::create([
            'siswa_id'   => $request->input('siswa_id'),
            'kela_id'   => $request->input('kela_id'),
            'absen'      => $request->input('absen'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih mengisi absensi siswa hari ini'
        ]);
    }
}
