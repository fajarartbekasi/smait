@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Data nilai ini merupakan inputan berasal dari guru.</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>Kode Mapel</td>
                                <td>Mapel</td>
                                    <td rowspan="2" class="text-center">KKM</td>
                                    <td colspan="4" class="text-center">Little</td>
                                </tr>
                                <tr>
                                    <td class="border-0"></td>
                                    <td class="border-0"></td>
                                    <td>Little</td>
                                    <td>Piggy</td>
                                    <td>Went</td>
                                    <td>To</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection