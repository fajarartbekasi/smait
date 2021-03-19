@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Data Kelas</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('buat-form.kelas')}}" class="btn btn-info">Tambah kelas</a>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-danger">
                            {{ session('success')}}
                        </div>
                    @endif
                    <div class="table responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse($kelas as $kela)
                                    <tr>
                                        <td>{{$kela->nama}}</td>
                                        <td>
                                            <form action="{{route('destroy.ruang', $kela->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('ambil-form-edit.ruang', $kela->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            Maaf data ruang untuk saat ini belum tersedia.
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