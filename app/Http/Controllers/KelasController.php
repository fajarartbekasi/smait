<?php

namespace App\Http\Controllers;

use App\Wala;
use App\User;
use App\Kela;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kela::with('wala')->get();

        return view('kelas.index', compact('kelas'));
    }
    public function create()
    {
        $walas = Wala::with('user')->get();

        return view('kelas.create', compact('walas'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'      => 'required',
            'wala_id'   => 'required',
            'keahlian'  => 'required',
        ]);

        $kelas = Kela::create([
            'nama'      => $request->input('nama'),
            'keahlian'  => $request->input('keahlian'),
            'wala_id'   => $request->input('wala_id'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih telah menambahkan kelas baru'
        ]);
    }
    public function destroy($id)
    {
        $kelas = Kela::findOrFail($id);

        $kelas->delete();

        return redirect()->back()->with([
            'success'   => 'Kelas berhasil di hapus'
        ]);
    }
}
