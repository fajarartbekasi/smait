@extends('layouts.app')

@section('content')
@role('admin')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-4 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Jumlah Siswa</h5>
                        <h1 class="font-weight-bolder">{{$siswas}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Jumlah Guru</h5>
                        <h1 class="font-weight-bolder">{{$gurus}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Jumlah Walas</h5>
                        <h1 class="font-weight-bolder">{{$walas}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Jumlah Kelas</h5>
                        <h1 class="font-weight-bolder">{{$kelas}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <h5>Jumlah Mapel</h5>
                        <h1 class="font-weight-bolder">{{$mapels}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <h5>Data Siswa</h5>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>T.T.L</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                                <tr>
                                    <td>{{$student->siswas->first()->nisn}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->siswas->first()->tempat_lahir}}, {{$student->siswas->first()->tanggal_lahir}}</td>
                                    <td>{{$student->siswas->first()->gender}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Maaf belum ada data siswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{$students->links()}}
                </div>
            </div>
        </div>
    </div>
@endrole
@role('guru|walas')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                             <h5>Jumlah Siswa</h5>
                             <h6>yang diajar</h6>
                        </div>

                        <h1 class="font-weight-bolder">50</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card border-0">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                             <h5>Jumlah Kelas</h5>
                             <h6>yang diajar</h6>
                        </div>

                        <h1 class="font-weight-bolder">50</h1>
                    </div>
                </div>
            </div>

                <div class="col-md-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="">Jadwal Mengajar</h3>
                            <div class="table table-responsive pt-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kelas</th>
                                            <th>Hari</th>
                                            <th>
                                                Mapel
                                            </th>
                                            <th>
                                                Jam Awal
                                            </th>
                                            <th>
                                                Jam Akhir
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($jadwals as $jadwal)
                                            <tr>
                                                <td >
                                                    <a href="{{route('lihat.detail.jadwal', $jadwal->id)}}" class="btn btn-outline-info btn-sm">
                                                        {{$jadwal->kela->nama}} {{$jadwal->kela->keahlian}}</td>
                                                    </a>
                                                <td>{{$jadwal->hari}}</td>
                                                <td>{{$jadwal->mapel->nama}}</td>
                                                <td>
                                                    {{$jadwal->jam_awal}}
                                                </td>
                                                <td>
                                                    {{$jadwal->jam_akhir}}
                                                </td>
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
    </div>
@endrole
@endsection
