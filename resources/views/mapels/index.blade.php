@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Data Mapel</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('mapel.create')}}" class="btn btn-info">Tambah Mapel</a>
                    </div>
                    @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Mapel</th>
                                    <th>Nama Mapel</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($mapels as $mapel)
                                <tr>
                                    <td>{{$mapel->kd_mapel}}</td>
                                    <td>{{$mapel->nama}}</td>
                                    <td>
                                        <form action="{{route('destroy.mapel', $mapel->id)}}" method="post">

                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('ambil-form-edit.edit', $mapel->id)}}" class="btn btn-outline-warning btn-sm">edit</a>
                                            <button class="btn btn-outline-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        Maaf data mapel belum tersedia
                                    </td>
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