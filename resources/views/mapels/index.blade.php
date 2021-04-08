@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Data Mapel</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('buat-form.mapel')}}" class="btn btn-info">Tambah Mapel</a>
                    </div>
                    @if(session('success'))
                            <div class="alert alert-danger">
                                {{ session('success')}}
                            </div>
                        @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Mapel</th>
                                    <th>Paket</th>
                                    <th>Jenis Mapel</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($mapels as $mapel)
                                <tr>
                                    <td>{{$mapel->nama}}</td>
                                    <td>{{$mapel->paket}}</td>
                                    <td>{{$mapel->jenis_mapel}}</td>
                                    <td>
                                        <form action="{{route('destroy.mapel', $mapel->id)}}" method="post">

                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('ambil-form-edit.mapel', $mapel->id)}}" class="btn btn-outline-warning btn-sm">edit</a>
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
                        {{$mapels->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection