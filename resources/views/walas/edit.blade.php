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
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                    <form action="{{route('update.perwalian', $user->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="">Pilih Nama Guru</label>
                            <input type="text" class="form-control" value="{{$user->user->name}}"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Masukan nama kelas</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" name="keahlian" id="" class="form-control">
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