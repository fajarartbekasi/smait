<?php

namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::paginate(5);

        return view('jurusan.index', compact('jurusans'));
    }
    public function create()
    {
       return view('jurusan.create');
    }
    public function store(Request $request)
    {
       $this->validate($request,[
           'kd_jurusan' => 'required|max:10',
           'nama'       => 'required',
       ]);

       $jurusan = Jurusan::create([
           'kd_jurusan' => $request->input('kd_jurusan'),
           'nama'       => $request->input('nama'),
       ]);

       return redirect()->back()->with([
            'success' => 'terimakasih anda telah menambahkan data jurusan baru.'
        ]);
    }
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        return view('jurusan.edit', compact('jurusan'));
    }
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->kd_jurusan = $request->input('kd_jurusan');
        $jurusan->nama       = $request->input('nama');

        $jurusan->save();

        return redirect()->back()->with([
            'success' => 'terimakasih anda telah memperbarui data jurusan.'
        ]);
    }
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $jurusan->delete();

        return redirect()->back()->with([
            'success' => 'Uppsss. data jurusan telah dihapus.'
        ]);
    }
}
