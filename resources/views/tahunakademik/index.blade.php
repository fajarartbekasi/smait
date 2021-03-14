@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">

            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Tahun Akademik</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('tahun-akademik.create')}}" class="btn btn-info">Tambah Tahun Akademik Baru</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tahun Akademik</th>
                                    <th>Status</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                        </table>
                        <tbody>
                            <tr>
                                <td>Tahun Akademik</td>
                                <td>Status</td>
                                <td>Options</td>
                            </tr>
                        </tbody>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection