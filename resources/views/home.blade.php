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
@endsection
