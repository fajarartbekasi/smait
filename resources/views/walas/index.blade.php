@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="card border-0">
                <div class="card-body">
                    <div class="mt-3 mb-3">
                        <h3>Data walikelas</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Email</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($walas as $get)
                                <tr>
                                    <td>{{$get->name}}</td>
                                    <td>{{$get->email}}</td>
                                    <td>{{$get->roles->implode('name',',')}}</td>
                                    <td>
                                        <form action="{{route('destroy.walas', $get->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('ambil-form-edit.walas',$get->id)}}" class="btn btn-warning btn-sm">Edit</a>
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