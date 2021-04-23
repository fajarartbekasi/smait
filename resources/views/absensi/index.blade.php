@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian!!!</h5>
                        <h5>ini adalah data absensi kehadiran guru</h5>
                    </div>

                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Jam Absen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($absensis as $absensi)
                                    <tr>
                                        <td>{{$absensi->user->name}}</td>
                                         @if($absensi->absen == 'hadir')
                                            <td class="badge badge-info">{{$absensi->absen}}</td>
                                        @elseif($absensi->absen == 'ijin')
                                            <td class="badge badge-warning">{{$absensi->absen}}</td>
                                        @elseif($absensi->absen == 'sakit')
                                            <td class="badge badge-secondary">{{$absensi->absen}}</td>
                                        @elseif($absensi->absen == 'Tidak masuk')
                                            <td class="badge badge-danger">{{$absensi->absen}}</td>
                                        @endif
                                        <td>{{$absensi->created_at}}</td>
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