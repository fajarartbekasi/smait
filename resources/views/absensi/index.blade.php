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
                                        <td>{{$absensi->name}}</td>
                                        @if($absensi->absensis->first()->absen == 'hadir')
                                            <td class="badge badge-info">{{$absensi->absensis->first()->absen}}</td>
                                        @elseif($absensi->absensis->first()->absen == 'ijin')
                                            <td class="badge badge-warning">{{$absensi->absensis->first()->absen}}</td>
                                        @elseif($absensi->absensis->first()->absen == 'sakit')
                                            <td class="badge badge-secondary">{{$absensi->absensis->first()->absen}}</td>
                                        @elseif($absensi->absensis->first()->absen == 'Tidak masuk')
                                            <td class="badge badge-danger">{{$absensi->absensis->first()->absen}}</td>
                                        @endif
                                        <td>{{$absensi->absensis->first()->created_at->format('H:i:s')}}</td>
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