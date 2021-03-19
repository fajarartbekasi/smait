@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h5>Data Guru</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($gurus as $guru)
                                        <tr>
                                            <td>{{$guru->name}}</td>
                                            <td>{{$guru->email}}</td>
                                            <td>
                                                <form action="{{route('destroy.guru', $guru->id)}}" method="post">
                                                    @csrf

                                                    @method('DELETE')
                                                    <a href="{{route('ambil-form-edit.guru',$guru->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                                    <button class="btn btn-outline-danger btn-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                Maaf data yang anda minta saat ini belum tersedia
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