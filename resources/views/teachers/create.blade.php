@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian !!!</h5>
                        <h6>Silahkan masukan data guru dengan benar dan lengkap.</h6>
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nuptk">NUPTK</label>
                                    <input type="text" name="nuptk" id="" class="form-control" placeholder="NUPTK">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="nama" id="" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nuptk">Tempat Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="tmp_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="tgl_lahir" id="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option value="">Masukan Jenis kelamin</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="images">Photo</label>
                                    <input type="file" name="images" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info">
                                    Simpan data guru
                                </button>
                                <a href="{{route('ambil-data.guru')}}" class="btn btn-secondary">cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection