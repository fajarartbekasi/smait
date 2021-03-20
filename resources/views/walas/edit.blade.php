@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian!!</h5>
                        <h5>Silahkan masukan nama guru yang akan menjadi walas</h5>
                    </div>

                    <form action="{{route('update.walas', $user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Pilih Nama Guru</label>
                            <select name="guru_id" id="" class="form-control">
                                <option value="">Nama Guru</option>

                                @foreach($gurus as $guru)
                                <option value="{{$guru->id}}">{{$guru->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="row col-md-12">
                            <button type="submit" class="btn btn-info">Tambah Walas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection