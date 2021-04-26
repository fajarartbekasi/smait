<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Absensi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AbsensisiswaController extends Controller
{
    public function index()
    {

        $students = Absensi::with(['siswa.user' => function($user){
                    $user->where('id', Auth::user()->id);
                }])->paginate(5);

        return view('students.absensi.siswa.index', compact('students'));
    }
    public function create($id)
    {
        $siswa = User::findOrFail($id);

        return view('absensi.siswa.create', compact('siswa'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'siswa_id'     => 'required',
            'absen'     => 'required',
        ]);

        $absen = Absensi::create([
            'siswa_id'   => $request->input('siswa_id'),
            'absen'      => $request->input('absen'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih mengisi absensi siswa hari ini'
        ]);
    }
}
