<?php

namespace App\Http\Controllers;

use App\Wala;
use App\Guru;
use App\User;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function index()
    {
        $walas = User::whereHas('roles', function($role){
                $role->where('roles.name','=','Walas');
        })->paginate(5);

        return view('walas.index', compact('walas'));
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $gurus = User::whereHas('roles', function($role){
                $role->where('roles.name','=','Guru');
        })->get();

        return view('walas.edit', compact('user', 'gurus'));
    }
    public function update(Request $request, $id)
    {
        $walas = Wala::where('user_id', $id)->first();

        $walas->update([
            'guru_id'   => $request->input('guru_id'),
        ]);

        return redirect()->back()->with([
            'success' => 'Walas berhasil di tambah'
        ]);
    }
}
