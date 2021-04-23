@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Silahkan masukan nilai ulangan siswa</h5>
                    </div>
                    <div>
                        <form action="{{route('simpan-data.ulangan', $siswa->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Kelas</label>
                                        <input type="hidden" name="kela_id" value="{{$siswa->kela->id}}" id="">
                                        <input type="text" value="{{$siswa->kela->nama}} {{$siswa->kela->keahlian}}" class="form-control" id="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Siswa</label>
                                        <input type="hidden" name="user_id" value="{{$siswa->user->id}}" class="form-control" id="" readonly>
                                        <input type="text" value="{{$siswa->user->name}}" class="form-control" id="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Nama Guru</label>
                                        <input type="hidden" name="guru_id" value="{{Auth::user()->id}}" class="form-control" id="">
                                        <input type="text" value="{{Auth::user()->name}}" class="form-control" id="" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Mata Pelajaran</label>
                                        @foreach($jadwals as $jadwal)
                                            <input type="hidden" name="mapel_id" value="{{$jadwal->mapel->id}}" class="form-control" id="">
                                            <input type="text" value="{{$jadwal->mapel->nama}}" class="form-control" id="" readonly>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ulangan Harian 1</label>
                                        <input type="text" name="ulh_1" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ulangan Harian 2</label>
                                        <input type="text" name="ulh_2" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Ulangan Harian 3</label>
                                        <input type="text" name="ulh_3" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">UTS</label>
                                        <input type="text" name="uts" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">UAS</label>
                                        <input type="text" name="uas" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">Simpan Nilai</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection