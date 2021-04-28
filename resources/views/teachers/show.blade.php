@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <div class="">
                        <div class="text-center">
                            <h2>Jadwal Mengajar</h2>
                            <h3>{{$jadwal->kela->nama}}, {{$jadwal->kela->keahlian}} {{$jadwal->hari}}</h3>
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
                                <th>Mapel</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
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
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5>Daftar Absensi kelas, {{$jadwal->kela->nama}}, {{$jadwal->kela->keahlian}}</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($kehadirans as $kehadiran)
                                    <tr>
                                            <td>{{$siswa->user->name}}</td>
                                            <td>{{$kehadiran->created_at}}</td>
                                            <td>{{$kehadiran->absen}}</td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="3"> Maaf absensi kosong </td>
                                    </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection