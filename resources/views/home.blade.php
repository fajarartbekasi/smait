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
                        @foreach($jadwals as $jadwal)
                            <div class="card-body">
                                <h3 class="">Jadwal Mengajar</h3>
                                <h3 class="">

                                        {{$jadwal->nama}} {{$jadwal->keahlian}}
                                </h3>
                                <div class="table table-responsive pt-3">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
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
                                            @foreach($jadwal->jadwals as $mapel)
                                                <tr>
                                                    <td>{{$mapel->hari}}</td>
                                                    <td>
                                                        <a href="{{route('lihat.detail.jadwal', $mapel->mapel_id)}}" class="btn btn-outline-info btn-sm">
                                                            {{$mapel->mapel->nama}}
                                                        </a>
                                                    </td>
                                                    <td>{{$mapel->jam_awal}}</td>
                                                    <td>{{$mapel->jam_akhir}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endrole
@role('siswa')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">

                        @foreach($schedules as $schedule)
                            <div class="mt-3 mb-3">
                                <h3>Jadwal Pelajaran </h3>
                                <h3>{{$schedule->nama}} - {{$schedule->keahlian}}</h3>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Nama Pelajaran</th>
                                        <th>Jam Awal</th>
                                        <th>Jam Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schedule->jadwals as $get)
                                    <tr>
                                        <td>{{$get->hari}}</td>
                                        <td>{{$get->mapel->nama}}</td>
                                        <td>{{$get->jam_awal}}</td>
                                        <td>{{$get->jam_akhir}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                        {{$schedules->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endrole
@endsection
