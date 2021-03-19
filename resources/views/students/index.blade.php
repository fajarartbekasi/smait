@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card border-0">
                    <div class="card-body">
                        <h5>Data Siswa</h5>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>User name</th>
                                        <th>Email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($siswas as $siswa)
                                        <tr>
                                            <td>{{$siswa->name}}</td>
                                            <td>{{$siswa->email}}</td>
                                            <td>
                                                <form action="{{route('destroy.siswa', $siswa->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('ambil-form-edit.siswa',$siswa->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                Maaf data yang anda minta belum tersedia
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
</div>

@endsection