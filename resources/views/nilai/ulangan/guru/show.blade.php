@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mt-3 mb-3">
                            <h4>Daftar Nilai Ulangan siswa</h4>
                            <h4>Kelas : {{$kelas->nama}} - {{$kelas->keahlian}}</h4>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>T.T.L</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswas as $siswa)
                                    <tr>
                                        <td>{{$siswa->nisn}}</td>
                                        <td>{{$siswa->user->name}}</td>
                                        <td>{{$siswa->tempat_lahir}} {{$siswa->tanggal_lahir}}</td>
                                        <td>
                                            <a href="{{route('buat-form.nilai', $siswa->id)}}" class="btn btn-info btn-sm">Input Nilai</a>
                                            <a href="{{route('lihat.detail.nilai', $siswa->id)}}" class="btn btn-info btn-sm">Cek Nilai</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection