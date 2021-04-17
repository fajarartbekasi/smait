@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="">
                        <div class="text-center">
                            <h2>Jadwal Mengajar</h2>
                            <h3>{{$jadwal->kela->nama}}, {{$jadwal->hari}}</h3>
                        </div>
                        <div class="mb-2 pt-2">
                            <h5>{{$jadwal->mapel->nama}}</h5>
                            <h5>{{$jadwal->jam_awal}} - {{$jadwal->jam_akhir}} WIB</h5>
                        </div>

                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th colspan="3">Absensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="post">
                            @forelse($siswas as $siswa)
                                <tr>
                                    <td>
                                        <a href="{{route('ambil-form-edit.absensi-siswa', $siswa->user_id)}}">
                                            {{$siswa->user->name}}
                                        </a>
                                    </td>
                                    <td>{{$jadwal->mapel->nama}}</td>
                                    <td>{{$jadwal->jam_awal}}</td>
                                    <td>{{$jadwal->jam_akhir}}</td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection