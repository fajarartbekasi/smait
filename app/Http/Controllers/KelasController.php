<?php

namespace App\Http\Controllers;

use App\Wala;
use App\User;
use App\Kela;
use App\Guru;
use App\Role;
use App\siswa;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $walas = Kela::with('user')->get();

        return view('kelas.index', compact('walas'));
    }
    public function create()
    {
        $walas = Wala::with('user')->get();

        return view('kelas.create',compact('walas'));
    }
    public function store(Request $request)
    {
       $this->validate($request, [
           'user_id'    => 'required',
           'nama'       => 'required',
       ]);


       $kelas = Kela::create([
           'user_id'    => $request->input('user_id'),
           'nama'       => $request->input('nama'),
           'keahlian'   => $request->input('keahlian')
       ]);

       return redirect()->back()->with(['success' => 'kelas berhasil ditambah']);
    }
    public function edit($id)
    {
        $kelas = Kela::findOrFail($id);

        $walas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','walas');
        })->get();

        return view('kelas.edit', compact('kelas','walas'));
    }
    public function update(Request $request, $id)
    {
        $kelas = Kela::findOrFail($id);

        $kelas->user_id = $request->input('user_id');
        $kelas->nama = $request->input('nama');
        $kelas->keahlian = $request->input('keahlian');

        $kelas->save();

        return redirect()->back()->with(['success'=>'kelas berhasil di perbarui']);
    }
    public function show($id)
    {
        $kelas = Kela::findOrFail($id);

        $siswas = Siswa::with('kela')->where('kela_id', $id)->get();

        return view('kelas.show', compact('kelas', 'siswas'));
    }
    public function destroy($id)
    {
        $kelas = Kela::findOrFail($id);

        $kelas->delete();

        return redirect()->back()->with(['success'=>'kelas berhasil di dihapus']);
    }
}
