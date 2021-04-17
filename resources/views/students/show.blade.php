@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mt-3 mb-3">
                        <h3>{{$mapels->hari}}</h3>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pelajaran</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td>{{$mapels->mapel->nama}}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection