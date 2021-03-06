@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">

                    <div class="mb-3">
                        <a class="btn btn-info" href="{{ route('buat-form.predikat') }}">
                            Predikat
                        </a>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td class="text-center">Mapel</td>
                                    <td rowspan="2" class="text-center">KKM</td>
                                    <td colspan="4" class="text-center">Grade</td>
                                </tr>
                                <tr>
                                    <td class="border-0"></td>
                                    <td class="text-center">A</td>
                                    <td class="text-center">B</td>
                                    <td class="text-center">C</td>
                                    <td class="text-center">To</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($predikats as $predikat)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{route('ambil-form-edit.predikat', $predikat->id)}}" class="btn btn-outline-info btn-sm">
                                            {{$predikat->mapel->nama}}
                                        </a>
                                    </td>
                                    <td class="text-center">{{$predikat->kkm}}</td>
                                    <td class="text-center">{{$predikat->grade_a}}</td>
                                    <td class="text-center">{{$predikat->grade_b}}</td>
                                    <td class="text-center">{{$predikat->grade_c}}</td>
                                    <td class="text-center">{{$predikat->grade_d}}</td>
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