@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">Data Jurusan</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('jurusan.create')}}" class="btn btn-info">Tambah jurusan baru</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Jurusan</th>
                                    <th>Nama Jurusan</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AK</td>
                                    <td>AKUTANSI</td>
                                    <td>
                                        <form action="" method="post">
                                            <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
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