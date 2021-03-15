<?php

namespace App\Http\Controllers;

use App\User;
use App\Siswa;
use App\Guru;
use App\Role;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'));
    }
    public function create()
    {
       $roles = Role::all();

       return view('users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'name'      => 'required',
            'email'     => 'required',
            'roles'      => 'required',
            'password'  => 'required',
        ]);

        $this->validate($request, [

            'name'      => 'required',
            'email'     => 'required',
            'roles'      => 'required',
            'password'  => 'required',
        ]);


        $request->merge(['password' => bcrypt($request->get('password'))]);

        if ($user = User::create($request->except('roles'))) {
                $user->syncRoles($request->get('roles'));

                $findUser = User::with('roles')->findOrFail($user->id);
                if ($findUser->roles->first()->name == 'admin') {

                    return redirect()->back()->with([
                        'success' => 'Anda berhasil menambahkan admin baru'
                    ]);
                }elseif ($findUser->roles->first()->name == 'guru') {
                    $guru = Guru::create([
                        'user_id'   => $findUser->id,
                    ]);

                    return redirect()->back()->with([
                        'success' => 'Anda berhasil menambahkan Guru baru'
                    ]);
                }elseif($findUser->roles->first()->name == 'siswa'){
                    $siswa = Siswa::create([
                        'user_id'   => $findUser->id,
                    ]);

                    return redirect()->back()->with([
                        'success' => 'Anda berhasil menambahkan Siswa baru'
                    ]);
                }

        } else {
                return redirect()->back()->with([
                        'success' => 'Maaf sepertinya ada kesalahan dalam menambahkan member baru'
                    ]);
        }
        return redirect()->back();
    }
}
