@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card border-0">

        <div class="card-body ">

            <div class="">
                <h3> Nama Walas : {{$kelas->user->name}}</h3>
                <div class="d-flex">
                    <h5 class="mr-3">Kelas : {{$kelas->nama}}</h5>
                    <h5 class="mr-3">{{$kelas->keahlian}}</h5>
                </div>
                <div class="mt-3">
                    <h5>Nama Siswa</h5>
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Nisn</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>T.T.L</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswas as $siswa)
                                <tr>
                                    <td>{{$siswa->nisn}}</td>
                                    <td>{{$siswa->user->name}}</td>
                                    <td>{{$siswa->gender}}</td>
                                    <td>{{$siswa->tempat_lahir}}, {{$siswa->tanggal_lahir}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>


@endsection