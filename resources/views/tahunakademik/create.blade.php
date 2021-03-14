@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card border-0">

                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian!!!</h5>
                        <h5>Silahkan masukan tahun akademik dengan benar dan tepat.</h5>
                    </div>
                    <form action="" method="post">

                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tahun Akademik</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-info">Simpan data</button>
                                <a href="{{route('tahun-akademik')}}" class="btn btn-secondary">
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