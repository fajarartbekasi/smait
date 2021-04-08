@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian !!!</h5>
                        <h5>Silahkan masukan data kelas dengan benar</h5>
                    </div>
                    <form action="{{route('update.kelas', $kelas->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="nama">Nama Kelas</label>
                            <input type="text" name="nama" id="" value="{{$kelas->nama}}" class="form-control" placeholder="Nama Pelajaran">
                        </div>
                        <div class="form-group">
                            <label for="">Pilih paket keahlian</label>
                            <select name="keahlian" class="form-control" id="">
                                <option value="">Pilih Keahlian</option>
                                <option value="ipa">IPA</option>
                                <option value="ips">IPS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Wali kelas</label>
                            <select name="user_id" class="form-control" id="">
                                <option value="">Pilih walikelas</option>
                                @foreach($walas  as $get)
                                    <option value="{{$get->id}}">{{$get->name}}</option>
                                @endforeach
                            </select>
                        </div>

                       <div class="row col-md-6">
                            <button type="submit" class="btn btn-info mr-3">Simpan data kelas</button>
                            <a href="{{route('ambil-data.kelas')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection