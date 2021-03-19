<?php

namespace App\Http\Controllers;

use App\User;
use App\Siswa;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','siswa');
        })->paginate(5);

        return view('students.index', compact('siswas'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('students.create', compact('user'));
    }
    public function update(Request $request, $id)
    {

        $siswa = Siswa::where('user_id', $id)->first();

        $siswa->tempat_lahir  = $request->input('tempat_lahir');
        $siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $siswa->nisn          = $request->input('nisn');
        $siswa->gender        = $request->input('gender');
        $siswa->alamat        = $request->input('alamat');

        $siswa->save();

        return redirect()->back()->with([
            'success' => 'Siswa berhasil di update'
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if($user->delete()){
            $siswa = Siswa::where('user_id', $user->id)->first();

            $siswa->delete();
        }

        return redirect('ambil-data/siswa')->with([
            'success' => 'Data berhasil dihapus'
        ]);


    }

}
