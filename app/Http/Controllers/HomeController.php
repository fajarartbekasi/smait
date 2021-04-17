<?php

namespace App\Http\Controllers;

use App\User;
use App\Kela;
use App\Mapel;
use App\Jadwal;
use App\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [
            'siswas'    => User::whereHas('roles', function($role){
                                    $role->where('roles.name','=','siswa');
                            })->count(),
            'gurus'     => User::whereHas('roles', function($role){
                                    $role->where('roles.name','=','guru');
                            })->count(),
            'walas'     => User::whereHas('roles', function($role){
                                    $role->where('roles.name','=','walas');
                            })->count(),
            'kelas'     => Kela::count(),
            'mapels'    => Mapel::count(),
            'students'  => User::whereHas('roles', function($role){
                                    $role->where('roles.name','=','siswa');
                            })->paginate(5),
            'jadwals'   => Kela::whereHas('jadwals', function($role){
                                    $role->where('jadwals.user_id','=',Auth::user()->id);
                            })->get(),
            'schedules' => Kela::whereHas('siswas', function($role){
                                    $role->where('siswas.user_id','=',Auth::user()->id);
                            })->paginate(1)
         ];

        return view('home', $data);

    }
}
