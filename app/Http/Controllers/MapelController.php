<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapels = Mapel::paginate(5);
        return view('mapels.index', compact('mapels'));
    }
    public function create()
    {
        return view('mapels.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kd_mapel' => 'required|max:3',
            'nama'     => 'required',
        ]);

        $mapel = Mapel::create([
            'kd_mapel'  => $request->input('kd_mapel'),
            'nama'      => $request->input('nama'),
        ]);

        return redirect()->back()->with([
                        'success' => 'Terimakasih anda telah menambahkan pelajaran baru.'
            ]);
    }
    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);

        return view('mapels.edit', compact('mapel'));
    }
    public function update(Request $request, $id)
    {
        $mapel = Mapel::findOrFail($id);

        $mapel->kd_mapel = $request->input('kd_mapel');
        $mapel->nama     = $request->input('nama');

        $mapel->save();

        return redirect()->back()->with([
                        'success' => 'Data pelajaran berhasil diubah.'
            ]);

    }
    public function destroy($id)
    {
        $mapel = Mapel::findOrFail($id);

        $mapel->delete();

        return redirect()->back()->with([
                        'success' => 'terimakasih anda telah menghapus mata pelajaran'
            ]);
    }

}
