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
        $predikats = Predikat::with('mapel','guru')->get();


        return view('nilai.predikat.index', compact('predikats'));
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
    public function edit($id)
    {
        $predikat = Predikat::findOrFail($id);

        $mapels = Mapel::all();

        $gurus = User::whereHas('roles', function($role){
                                    $role->whereIn('roles.name',['guru','walas']);
                            })->get();

        return view('nilai.predikat.edit', compact('predikat','gurus', 'mapels'));
    }
    public function update(Request $request, $id)
    {
        $predikat = Predikat::findOrFail($id);

        $predikat->mapel_id    = $request->input('mapel_id');
        $predikat->guru_id     = $request->input('guru_id');
        $predikat->kkm         = $request->input('kkm');
        $predikat->grade_a     = $request->input('grade_a');
        $predikat->grade_b     = $request->input('grade_b');
        $predikat->grade_c     = $request->input('grade_c');
        $predikat->grade_d     = $request->input('grade_d');

        $predikat->save();

        return redirect()->back()->with(['success' => 'Predikat telah di perbarui']);
    }
}
