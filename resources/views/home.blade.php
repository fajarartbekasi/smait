@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Jumlah Siswa</h5>
                    <h5 class="font-weight-bolder">200</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Jumlah Guru</h5>
                    <h5 class="font-weight-bolder">200</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Jumlah Kelas</h5>
                    <h5 class="font-weight-bolder">200</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Jumlah Mapel</h5>
                    <h5 class="font-weight-bolder">200</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-0">
        <div class="card-body">
            <h5>Data Siswa</h5>
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
@endsection
