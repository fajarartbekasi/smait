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
                                @forelse($teachers as $teacher)
                                    <tr>

                                        <td>{{$teacher->wala->user->name}}</td>
                                        @if($teacher->absen == 'hadir')
                                        <td class="badge badge-info">{{$teacher->absen}}</td>
                                        @elseif($teacher->absen == 'ijin')
                                            <td class="badge badge-warning">{{$teacher->absen}}</td>
                                        @elseif($teacher->absen == 'sakit')
                                            <td class="badge badge-secondary">{{$teacher->absen}}</td>
                                        @elseif($teacher->absen == 'Tidak masuk')
                                            <td class="badge badge-danger">{{$teacher->absen}}</td>
                                        @endif
                                        <td>{{$teacher->created_at}}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3"></td>
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