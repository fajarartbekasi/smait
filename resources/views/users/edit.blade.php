@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="card border-0">
        <div class="card-body">
            <div class="col-md-12" >
                <div class="alert alert-info" style="margin-top: -40px;">
                    Silahkan masukan informasi dibawah ini dengan benar dan lengkap.
                </div>
            </div>
            <form action="{{route('update.user', $user->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name</label>

                            <input type="text" name="name" class="form-control" value="{{$user->name}}" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email</label>

                            <input type="text" name="email" class="form-control" value="{{$user->email}}" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Password</label>

                            <input type="text" name="password" class="form-control" value="{{$user->password}}" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="">Role</label>
                        <select name="role" class="form-control" id="" >
                            <option value="">Pilih Roles</option>

                            @foreach($roles as $role)

                                <option value="{{$role->id}}">{{$role->name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-info">Simpan pembaruan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection