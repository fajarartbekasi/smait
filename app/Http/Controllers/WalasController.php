<?php

namespace App\Http\Controllers;

use App\Wala;
use App\Guru;
use App\User;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function index()
    {
        $walas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','walas');
        })->paginate(5);

        return view('walas.index', compact('walas'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('walas.edit', compact('user'));
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
        }elseif($guru->delete()) {
            $walas = Wala::where('user_id', $user->id)->first();

            $walas->delete();
        }
        return redirect('ambil-data/walas')->with([
            'success' => 'Data berhasil dihapus'
        ]);
    }
}
