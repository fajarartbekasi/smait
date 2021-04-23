@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Silahkan cek daftar nilai ulangan siswa</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelas as $kela)
                                    <tr>
                                        <td>{{$kela->nama}} - {{$kela->keahlian}}</td>
                                        <td>
                                            <a href="{{route('lihat.detail.entry-siswa', $kela->id)}}" class="btn btn-info btn-sm">Entry Nilai</a>
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