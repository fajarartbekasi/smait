@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight">Perhatian !!!</h5>
                        <h5>Silahkan masukan nilai kkm dengan benar</h5>
                    </div>
                    <form method="post" action="{{route('simpan-data.predikat')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <select name="guru_id" id="" class="form-control">
                                        <option value="">Pilih Nama Guru</option>
                                        @foreach($gurus as $guru)
                                            <option value="{{$guru->id}}">{{$guru->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mata Pelajaran</label>
                                    <select name="mapel_id" id="" class="form-control">
                                        <option value="">Pilih Mapel</option>
                                        @foreach($mapels as $mapel)
                                            <option value="{{$mapel->id}}">{{$mapel->nama}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Grade A</label>
                                    <input type="text" name="grade_a" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Grade B</label>
                                    <input type="text" name="grade_b" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Grade C</label>
                                    <input type="text" name="grade_c" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Grade D</label>
                                    <input type="text" name="grade_d" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">KKM</label>
                                    <input type="text" name="kkm" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info">Simpan predikat</button>
                                <a href="{{route('home')}}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection