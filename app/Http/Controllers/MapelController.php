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
            'paket'             => 'required',
            'nama'              => 'required',
            'jenis_mapel'       => 'required',
        ]);

        $mapel = Mapel::create([
            'nama'              => $request->input('nama'),
            'paket'             => $request->input('paket'),
            'jenis_mapel'       => $request->input('jenis_mapel'),
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

        $mapel->nama            = $request->input('nama');
        $mapel->paket           = $request->input('paket');
        $mapel->jenis_mapel     = $request->input('jenis_mapel');

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
