@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">

                        <div class="py-3">
                            <h5>Jadwal kelas ,</h5>
                        </div>
                        <div class="table table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Kelas</th>
                                        <th>Mapel</th>
                                        <th>Jam</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kelas as $getkelas)
                                        <tr>
                                            <td>{{$getkelas->hari}}</td>
                                            <td>{{$getkelas->kela->nama}} {{$getkelas->kela->keahlian}}</td>
                                            <td>{{$getkelas->mapel->nama}}</td>
                                            <td>{{$getkelas->jam_awal}} - {{$getkelas->jam_akhir}}</td>
                                            <td>
                                                <form action="{{route('destroy.jadwal', $getkelas->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('ambil-form-edit.jadwal', $getkelas->id)}}" class="btn btn-sm btn-warning">Edit</a>
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