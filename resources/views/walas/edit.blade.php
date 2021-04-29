@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight-bold">Perhatian!!</h5>
                        <h5>Silahkan masukan nama guru yang akan menjadi walas</h5>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                    @endif
                    <form action="{{route('update.walas', $user->id)}}" method="post">
                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nuptk">NUPTK</label>
                                    <input type="text" name="nuptk" id="" class="form-control" placeholder="NUPTK">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agama</label>
                                    <select name="agama" class="form-control" id="">
                                        <option value="">Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nuptk">Tempat Tanggal Lahir</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="tmp_lahir" id="" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" name="tgl_lahir" id="" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option value="">Masukan Jenis kelamin</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="" class="form-control">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telp</label>
                                    <input type="text" name="telp" class="form-control" id="">
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