@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-success">
                        <h4 class="font-weight-bold">
                            Perhatian !!!
                        </h4>
                        <div>
                            <h6>Silahkan masukan data siswa dibawah ini dengan benar dan lengkap terimakasih.</h6>
                        </div>
                    </div>
                    <div>
                        <form action="{{route('update.siswa', $user->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="user_id" id="" value="{{$user->id}}" class="form-control" placeholder="Nim">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">Nisn</label>
                                        <input type="text" name="nisn" id="" class="form-control" placeholder="Nim">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">Tempat Tanggal Lahir</label>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <input type="text" name="tempat_lahir" id="" class="form-control" placeholder="Nim">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" name="tanggal_lahir" id="" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki - laki">Laki - Laki</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Pilih Kelas</label>
                                        <select name="kela_id" id="" class="form-control">
                                                <option value="">Pilih Kelas</option>
                                            @foreach($kelas as $kela)
                                                <option value="{{$kela->id}}"> {{$kela->nama}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info">
                                        Simpan Siswa Baru
                                    </button>
                                    <a href="{{route('ambil-data.siswa')}}" class="btn btn-secondary">
                                        Batal
                                    </a>
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