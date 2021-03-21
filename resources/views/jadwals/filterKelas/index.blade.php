@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">

                        <div class="py-3">
                            <h5>Jadwal kelas : {{$kelas->nama}}</h5>
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Mapel</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($shows as $show)
                                        <tr>
                                            <td>{{$show->nama}}</td>
                                            @foreach($show->jadwals as $get)
                                                <td>{{$get->hari}}</td>
                                                <td>{{$get->jam_awal}}</td>
                                                <td>{{$get->jam_akhir}}</td>
                                            @endforeach
                                            <td>
                                                <form action="{{route('destroy.jadwal', $show->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('ambil-form-edit.jadwal', $show->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
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