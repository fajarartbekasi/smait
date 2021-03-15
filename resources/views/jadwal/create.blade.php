@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="" method="post">

                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Pilih Jadwal</label>
                                @forelse($mapels as $mapel)
                                    <div class="form-check">
                                        <input class="form-check-input" name="mapel_id" type="checkbox" value="{{$mapel->id}}" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{$mapel->nama}}
                                        </label>
                                    </div>
                                @empty


                                @endforelse
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">waktu</label>
                                            <input type="text" name="durasi" id="" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection