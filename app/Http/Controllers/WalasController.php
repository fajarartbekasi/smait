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
        $user = Wala::find($id);

        dd($user->user_id);
        // return view('walas.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::with('guru')->findOrFail($id);

        return redirect()->back()->with([
            'success' => 'Walas berhasil di tambah'
        ]);
    }
}
