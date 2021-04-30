<?php

namespace App\Http\Controllers\Absensi;

use PDF;
use App\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function show(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $absensi = Absensi::with('guru.user')
                                ->whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])
                                ->whereNotNull('guru_id')->get();
        }

        $pdf = PDF::loadView('laporan.absensi', compact('absensi'))->setPaper('a4', 'potrait');

        return $pdf->stream('laporan_absensi.pdf');
    }
}
