@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian !!!</h5>
                        <h5>Silahkan masukan data pelajaran dengan benar</h5>
                    </div>
                    <form action="{{route('simpan-data.jadwal')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Hari</label>
                                    <select name="hari" id="" class="form-control">
                                        <option value="">*** Hari ***</option>
                                        <option value="senin">Senin</option>
                                        <option value="selesa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jam Awal</label>
                                    <input type="time" name="jam_awal" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jam Akhir</label>
                                    <input type="time" name="jam_akhir" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Pilih Mapel</label>
                                    <select name="mapel_id" id="" class="form-control">
                                        <option value="">Pilih mapel</option>
                                        @foreach($mapels as $jadwal)
                                        <option value="{{$jadwal->id}}">{{$jadwal->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="kela_id" id="" class="form-control">
                                        <option value="">*** Kelas ***</option>
                                        @forelse($kelas as $kela)
                                        <option value="{{$kela->id}}">{{$kela->nama}}</option>
                                        @empty
                                        <option value="">
                                            maaf kelas belum tersedia
                                        </option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-info">
                                    Tambah Jadwal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection