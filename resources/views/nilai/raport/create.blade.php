@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h4>Perhatian !!!</h4>
                <h4>Silahkan isi nilai raport dengan benar.</h4>
            </div>
            <form action="{{route('simpan-data.nilai.raport', $siswa->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nama siswa</label>
                            <input type="text" value="{{$siswa->user->name}}" id="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nama Pelajaran</label>
                            <select name="mapel_id" id="" class="form-control">
                                @foreach($jadwals as $mapel)
                                    <option value="{{$mapel->mapel->id}}">{{$mapel->mapel->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Nama Guru</label>
                            <select name="guru_id" id="" class="form-control">
                                @foreach($jadwals as $mapel)
                                    <option value="{{$mapel->user->id}}">{{$mapel->user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-1 & K-2</label>
                            <input type="text" name="k1_k2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-3</label>
                            <input type="text" name="k3" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-4</label>
                            <input type="text" name="k4" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-1 & K-2 Predikat</label>
                            <input type="text" name="k1_k2_predikat" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-3 Predikat</label>
                            <input type="text" name="k3_predikat" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">K-4 Predikat</label>
                            <input type="text" name="k4_predikat" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Sakit</label>
                            <input type="text" name="s" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Ijin</label>
                            <input type="text" name="i" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Alpha</label>
                            <input type="text" name="a" id="" class="form-control">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info">Simpan Nilai Raport</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection