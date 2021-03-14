@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card border-0">
                    <div class="card-body">
                        <h5>Data Siswa</h5>
                        <a href="{{route('siswa.create')}}" class="btn btn-info mb-3">Tambah Siswa Baru</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>T.T.L</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>8324242</td>
                                        <td>John Doe</td>
                                        <td>Bekasi, 20-03-2001</td>
                                        <td>Laki-Laki</td>
                                        <td>
                                            <form action="" method="post">
                                                <a href="http://" class="btn btn-outline-warning btn-sm">Edit</a>
                                                <button class="btn btn-outline-danger btn-sm">Hapus</button>
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
</div>

@endsection