@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian!!!</h5>
                        <h6>Silahkan masukan mata pelajaran baru dengan benar</h6>
                    </div>
                    <form action="{{route('simpan-data.mapel')}}" method="post">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama Mapel</label>
                                    <input type="text" name="nama" id="" class="form-control" placeholder="Nama Pelajaran">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kd_mapel">Pilih Paket</label>
                                    <select name="paket" id="" class="form-control">
                                        <option value="">Masukan paket</option>
                                        <option value="semua">Semua atau umum</option>
                                        <option value="ipa">IPA</option>
                                        <option value="ips">IPS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="kd_mapel">Kelompok</label>
                                    <select name="jenis_mapel" id="" class="form-control">
                                        <option value="">Masukan paket</option>
                                        <option value="semua">Semua atau umum</option>
                                        <option value="keahlian">Keahlian</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">Simpan Mapel Baru</button>
                                <a href="{{route('ambil-data.mapel')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection