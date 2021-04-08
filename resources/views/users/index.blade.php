@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data User</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('buat-form.invite')}}" class="btn btn-info">Invite new users</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>
                                            <a href="{{route('ambil-form-edit.user',$user->id)}}">
                                                {{$user->name}}
                                            </a>
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->roles->implode('name',',')}}</td>
                                        <td>
                                            <form action="" method="post">

                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            Maaf untuk semetara data belum tersedia
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection