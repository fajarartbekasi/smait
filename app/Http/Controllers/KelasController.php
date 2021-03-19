<?php

namespace App\Http\Controllers;

use App\Kela;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kela::all();

        return view('kelas.index', compact('kelas'));
    }
    public function create()
    {
        return view('kelas.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'  => 'required',
        ]);

        $kelas = Kela::create([
            'nama'  => $request->input('nama'),
        ]);

        return redirect()->back()->with([
            'success'   => 'terimakasih telah menambahkan kelas baru'
        ]);
    }
}
