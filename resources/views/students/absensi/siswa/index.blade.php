@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h4>Silahkan lihat absen kamu hari ini.</h4>
                    </div>

                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>
                                            {{Auth::user()->name}}
                                        </td>
                                        <td>
                                            {{$student->created_at->toDateString()}}
                                        </td>
                                        @if($student->absen == 'sakit')
                                            <td>
                                                <p class="badge badge-info">{{$student->absen}}</p>
                                            </td>
                                        @elseif($student->absen == 'ijin')
                                            <td>
                                                <p class="badge badge-danger">
                                                    {{$student->absen}}
                                                </p>
                                            </td>
                                        @elseif($student->absen == 'alpa')
                                            <td>
                                                <p class="badge badge-danger">{{$student->absen}}</p>
                                            </tr>
                                        @else($student->absen == 'hadir')
                                            <td>
                                                <p class="badge badge-success">{{$student->absen}}</p>
                                            </tr>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{$students->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection