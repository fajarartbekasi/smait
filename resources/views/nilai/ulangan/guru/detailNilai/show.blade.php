@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info">
                <h3>Daftar Nilai ulangan berdasarkan nama siswa</h3>
            </div>
            <div class="table table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td class="text-center">Nama</td>
                            <td rowspan="2" class="text-center">Kelas</td>
                            <td rowspan="2" class="text-center">Mapel</td>
                            <td colspan="5" class="text-center">Nilai</td>
                        </tr>
                        <tr>
                            <td class="border-0"></td>
                            <td class="text-center">Ulh-1</td>
                            <td class="text-center">ulh-2</td>
                            <td class="text-center">ulh-3</td>
                            <td class="text-center">uts</td>
                            <td class="text-center">uas</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ulangans as $ulangan)
                        <tr>
                            <td class="text-center">{{$ulangan->user->name}}</td>
                            <td class="text-center">{{$ulangan->kela->nama}} {{$ulangan->kela->keahlian}}</td>
                            <td class="text-center">{{$ulangan->mapel->nama}}</td>
                            <td class="text-center">{{$ulangan->ulh_1}}</td>
                            <td class="text-center">{{$ulangan->ulh_2}}</td>
                            <td class="text-center">{{$ulangan->ulh_3}}</td>
                            <td class="text-center">{{$ulangan->uts}}</td>
                            <td class="text-center">{{$ulangan->uas}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection