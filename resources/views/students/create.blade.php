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
                        <form action="" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">Nim</label>
                                        <input type="text" name="nim" id="" class="form-control" placeholder="Nim">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" id="" class="form-control" placeholder="Nama lengkap">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">Tempat Tanggal Lahir</label>
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <input type="text" name="tmp_lahir" id="" class="form-control" placeholder="Nim">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" name="tgl_lahir" id="" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki - laki">Laki - Laki</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Agama</label>
                                        <select name="" class="form-control" id="">
                                            <option value="">Masukan Agama anda</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nim">Nama Orang Tua</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="bapak" id="" class="form-control" placeholder="Nama Bapak">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="ibu" id="" class="form-control" placeholder="Nama Ibu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Sekolah Asal</label>
                                        <input type="text" name="asal_sekolah" id="" class="form-control" placeholder="Asal Sekolah">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="images">Photo</label>
                                        <input type="file" name="images" id="" class="form-control">
                                        <span class="text-danger">
                                            File wajib: JPG,PNG
                                        </span>
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