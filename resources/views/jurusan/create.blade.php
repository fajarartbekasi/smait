@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card border-0">

                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian!!!</h5>
                        <h5>Silahkan masukan jurusan dengan benar dan tepat.</h5>
                    </div>
                    <form action="{{route('simpan-data.jurusan')}}" method="post">

                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Jurusan</label>
                                    <input type="text" name="kd_jurusan" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <input type="text" name="nama" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info">Simpan data</button>
                                <a href="{{route('ambil-data.jurusan')}}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection