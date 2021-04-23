@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="mt-2 mb-2 d-flex justify-content-between">
                        <div>
                            <h4>Nama Siswa : {{$raports->user->name}}</h4>
                            <h4>Kelas : {{$raports->kela->nama}} {{$raports->kela->keahlian}}</h4>
                        </div>
                        <div>
                            <a href="{{route('cetak.raport', $raports->id)}}" class="btn btn-info">Cetak Raport</a>
                        </div>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td class="text-center">Mapel</td>
                                    <td colspan="3" class="text-center">Nilai</td>
                                    <td colspan="3" class="text-center">Predikat</td>
                                    <td colspan="3" class="text-center">Keterangan</td>
                                </tr>
                                <tr>
                                    <td class="border-0"></td>
                                    <td class="text-center">K1 & K2</td>
                                    <td class="text-center">K3</td>
                                    <td class="text-center">K4</td>
                                    <td class="text-center">K1 & K2</td>
                                    <td class="text-center">K3</td>
                                    <td class="text-center">K4</td>
                                    <td class="text-center">S</td>
                                    <td class="text-center">I</td>
                                    <td class="text-center">A</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nilais as $nilai)
                                    <tr>
                                        <td class="text-center">{{$nilai->mapel->nama}}</td>
                                        <td class="text-center">{{$nilai->k1_k2}}</td>
                                        <td class="text-center">{{$nilai->k3}}</td>
                                        <td class="text-center">{{$nilai->k4}}</td>
                                        <td class="text-center">{{$nilai->K1_k2_predikat}}</td>
                                        <td class="text-center">{{$nilai->k3_predikat}}</td>
                                        <td class="text-center">{{$nilai->k4_predikat}}</td>
                                        <td class="text-center">{{$nilai->s}}</td>
                                        <td class="text-center">{{$nilai->i}}</td>
                                        <td class="text-center">{{$nilai->a}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection