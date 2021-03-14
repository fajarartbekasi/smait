<?php

namespace App\Http\Controllers;

use App\Ruang;
use Illuminate\Http\Request;

class RuangkelasController extends Controller
{
    public function index()
    {
        $ruangs = Ruang::paginate(5);

        return view('kelas.index',compact('ruangs'));
    }
    public function create()
    {
        return view('kelas.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'kd_ruang'  => 'required|max:5',
            'nama'      => 'required',
        ]);

        $ruang = Ruang::create([
            'kd_ruang'  => $request->input('kd_ruang'),
            'nama'  => $request->input('nama'),
        ]);

        return redirect()->back()->with([
            'success' => 'terimakasih anda telah menambahkan data ruang baru.'
        ]);
    }
    public function edit($id)
    {
       $ruang = Ruang::findOrFail($id);

       return view('kelas.edit', compact('ruang'));
    }
    public function update(Request $request, $id)
    {
        $ruang = Ruang::findOrFail($id);

        $ruang->kd_ruang    = $request->input('kd_ruang');
        $ruang->nama        = $request->input('nama');

        $ruang->save();

         return redirect()->back()->with([
            'success' => 'terimakasih anda telah memperbarui data ruang.'
        ]);
    }
    public function destroy($id)
    {
         $ruang = Ruang::findOrFail($id);

         $ruang->delete();

         return redirect()->back()->with([
            'success' => 'Upss Data kelas terhapus.'
        ]);
    }
}
