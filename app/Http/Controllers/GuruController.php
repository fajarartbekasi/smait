<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = User::whereHas('roles', function($role){
                $role->where('roles.name','=','guru');
        })->paginate(5);

        return view('teachers.index',compact('gurus'));
    }

    public function edit($id)
    {
        $teacher = User::findOrFail($id);
        return view('teachers.create', compact('teacher'));
    }
    public function update(Request $request, $id)
    {
        $guru = Guru::where('user_id', $id)->first();

        $guru->nuptk = $request->input('nuptk');
        $guru->agama = $request->input('agama');
        $guru->jenis_kelamin = $request->input('jenis_kelamin');
        $guru->tgl_lahir = $request->input('tgl_lahir');
        $guru->tmp_lahir = $request->input('tmp_lahir');
        $guru->alamat = $request->input('alamat');
        $guru->telp = $request->input('telp');

        $guru->save();

        return redirect()->back()->with(['success'=>'Data guru berhasil di perbarui']);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if($user->delete()){
            $guru = Guru::where('user_id', $user->id)->first();

            $guru->delete();
        }
        return redirect('ambil-data/guru')->with([
            'success' => 'Data berhasil dihapus'
        ]);
    }
}
