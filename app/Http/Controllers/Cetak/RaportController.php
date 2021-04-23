<?php

namespace App\Http\Controllers\Cetak;


use PDF;
use Carbon\Carbon;
use App\Raport;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RaportController extends Controller
{
    public function show($id)
    {
            $raports = Raport::findOrFail($id);
            $nilaiakhir = (($raports->k3 * 30) + ($raports->k4 * 70)) / 100;
            $predikat = ($raports->k3 + $raports->k4 + $nilaiakhir) / 3;
            $date = Carbon::now();
            if ($predikat > 95) {
                $predikats = 'A+';
            }elseif($predikat > 90){
                $predikats = 'A';
            }elseif($predikat > 85){
                $predikats = 'A-';
            }elseif($predikat > 80){
                $predikats = 'B+';
            }elseif($predikat > 75){
                $predikats = 'B';
            }elseif($predikat > 70){
                $predikats = 'B-';
            }elseif($predikat > 65){
                $predikats = 'C';
            }elseif($predikat > 60){
                $predikats = 'D';
            }

            $nilais    = Raport::with('user','mapel','kela','guru')->where('user_id',$raports->user_id)->get();

            $pdf = PDF::loadView('cetak.raport.show', compact('raports','nilais','nilaiakhir', 'predikat','predikats', 'date'))->setPaper('a4', 'potrait');

            return $pdf->stream('raport.pdf');
    }
}
