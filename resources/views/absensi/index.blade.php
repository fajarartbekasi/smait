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
                    <div class="mt-3 mb-3">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="">Dari Tanggal</label>
                                        <input type="date" name="tgl_awal" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Dari akhir</label>
                                        <input type="date" name="tgl_akhir" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-info">Cari Absensi</button>
                            </div>
                        </form>
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
                                @foreach($teachers as $teacher)
                                    <tr>

                                        <td>{{$teacher->guru->user->name}}</td>
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