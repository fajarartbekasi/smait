@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h4 class="font-wieght-bold">Perhatian</h4>
                        <h4>Silahkan lakukan absen </h4>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" name="" value="{{$siswa->name}}" id="" readonly class="form-control">
                    </div>

                    <form action="{{route('simpan-data.absensi-siswa')}}" method="post">
                        @csrf
                        <input type="hidden" name="siswa_id" value="{{$siswa->id}}" id="" readonly class="form-control">
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <select name="absen" class="form-control" id="">
                                <option value="">Pilih keterangan</option>
                                <option value="hadir">Hadir</option>
                                <option value="sakit">Sakit</option>
                                <option value="Ijin">Ijin</option>
                                <option value="Tidak masuk">Tidak Masuk</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-info">Absen</button>
                            <a href="{{route('home')}}" class="btn btn-secondary">cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection