@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="py-3 px-3">
                            <a href="{{route('buat-form.jadwal')}}" class="btn btn-info">Tambah Jadawl</a>
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Kelas</th>
                                        <th>Lihat Jadwal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwals as $jadwal)
                                        <tr>
                                            <td>{{$jadwal->kela->nama}} - {{$jadwal->kela->keahlian}}</td>
                                            <td>
                                                <a href="{{route('lihat.jadwal', $jadwal->kela_id)}}" class="btn btn-sm btn-info">lihat jadwal</a>
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
    </div>
@endsection