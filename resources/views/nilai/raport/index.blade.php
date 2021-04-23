@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Silahkan isi nilai raport.</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Gender</th>
                                    <th>T.T.L</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $kela)
                                    @foreach($kela->siswas as $siswa)
                                    <tr>
                                        <td>{{$siswa->nisn}}</td>
                                        <td>{{$siswa->user->name}}</td>
                                        <td>{{$siswa->gender}}</td>
                                        <td>{{$siswa->tempat_lahir}},{{$siswa->tanggal_lahir}}</td>
                                        <td>
                                            <a href="{{route('buat-form.raport', $siswa->id)}}" class="btn btn-info btn-sm">Input Nilai Raport</a>
                                            <a href="{{route('lihat.detail.nilai.raport', $siswa->id)}}" class="btn btn-info btn-sm">Cek Nilai Raport</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection