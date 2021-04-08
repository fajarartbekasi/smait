<?php

namespace App\Http\Controllers;

use App\User;
use App\Mapel;
use App\Absensi;
use App\Predikat;
use Illuminate\Http\Request;

class PredikatController extends Controller
{

    public function index()
    {
        return view('nilai.predikat.index');
    }
    public function create()
    {

        $data = [
            'gurus'     => User::whereHas('roles', function($role){
                                    $role->whereIn('roles.name',['guru','walas']);
                            })->get(),
            'mapels'    => Mapel::all(),
        ];
        return view('nilai.predikat.create', $data);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'mapel_id'          => 'required',
            'guru_id'           => 'required',
            'kkm'               => 'required',
            'grade_a'           => 'required',
            'grade_b'           => 'required',
            'grade_c'           => 'required',
            'grade_d'           => 'required',
        ]);

        $predikat = Predikat::create([
            'mapel_id'  => $request->input('mapel_id'),
            'guru_id'   => $request->input('guru_id'),
            'kkm'       => $request->input('kkm'),
            'grade_a'   => $request->input('grade_a'),
            'grade_b'   => $request->input('grade_b'),
            'grade_c'   => $request->input('grade_c'),
            'grade_d'   => $request->input('grade_d'),
        ]);

        return redirect()->back()->with(['success'=> 'Terimakasih predikat telah disimpan']);
    }
}
