@extends('layouts.cetak')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h3 class="text-center">LAPORAN HASIL BELAJAR</h3>
                    <h4>Nama Siswa : {{$raports->user->name}}</h4>
                    <h4>Kelas : {{$raports->kela->nama}} {{$raports->kela->keahlian}}</h4>
                </div>
                <h4>Nilai hasil belajar</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Mata pelajaran</th>
                            <th>pengetahuan</th>
                            <th>keterampilan</th>
                            <th>Nilai</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nilais as $nilai)
                            <tr>
                                <td>{{$nilai->mapel->nama}}</td>
                                <td>{{$nilai->k3}}</td>
                                <td>{{$nilai->k4}}</td>
                                <td>{{$nilaiakhir}}</td>
                                <td>{{$predikats}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4>Catatan untuk orang tua wali</h4>
                <table class="table table-striped">
                    <tbody>

                            <tr>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                            </tr>
                    </tbody>
                </table>

                <div class="text-right">
                    <h4>Dikeluarkan di: Bekasi</h4>
                    <h4>Tanggal: {{$date->toDateString()}}</h4>
                </div>
                <div class="d-flex">
                    <div class="text-left">
                        <h4>Mengetahui,</h4>
                        <h4>Kepala Sekolah,</h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Nama Kepsek</h4>
                    </div>
                    <div class="text-center">
                        <h4>Orang Tua Wali</h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Nama Kepsek</h4>
                    </div>
                    <div  class="text-right">
                        <h4>Walikelas,</h4>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>{{Auth::user()->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection