@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Tambah Walas</h5>
                    <div class="mt-3 mb-3">
                        <a href="" class="btn btn-info">Tambah walas baru</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($walas as $get)
                                <tr>
                                    <td>{{$get->name}}</td>
                                    <td>{{$get->email}}</td>
                                    <td>
                                        <form action="" method="post">
                                            <a href="{{route('ambil-form-edit.walas', $get->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        Maaf untuk sementara data walas belum tersedia
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