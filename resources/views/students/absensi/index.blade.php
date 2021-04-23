@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="mt-3 mb-3 d-flex align-items-center">
                            <h6 class="mr-2">Data Absensi
                                <h4 class="text-info">{{Auth::user()->name}}</h4>
                            </h6>
                        </div>
                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kehadiran</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($absensis as $absensi)
                                        <tr >
                                            @if($absensi->absen == 'hadir')
                                                <td class="badge ml-3 mt-2 mb-2 badge-info">{{$absensi->absen}}</td>
                                            @elseif($absensi->absen == 'ijin')
                                                <td class="badge ml-3 mt-2 mb-2 badge-warning">{{$absensi->absen}}</td>
                                            @elseif($absensi->absen == 'sakit')
                                                <td class="badge ml-3 mt-2 mb-2 badge-secondary">{{$absensi->absen}}</td>
                                            @elseif($absensi->absen == 'Tidak masuk')
                                                <td class="badge ml-3 mt-2 mb-2 badge-danger">{{$absensi->absen}}</td>
                                            @endif
                                            <td>{{$absensi->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$absensis->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection