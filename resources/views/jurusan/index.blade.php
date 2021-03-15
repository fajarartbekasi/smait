@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Jurusan</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('buat-form.jurusan')}}" class="btn btn-info">Tambah jurusan baru</a>
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
                                    <th>Kode Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jurusans as $jurusan)
                                    <tr>
                                        <td>{{$jurusan->kd_jurusan}}</td>
                                        <td>{{$jurusan->nama}}</td>
                                        <td>
                                            <form action="{{route('destroy.jurusan', $jurusan->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('ambil-form-edit.jurusan', $jurusan->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            Maaf untuk sementara jurusan belum tersedia.
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