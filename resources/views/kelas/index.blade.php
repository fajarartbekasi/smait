@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5>Data Kelas</h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('kelas.create')}}" class="btn btn-info">Tambah kelas</a>
                    </div>
                    <div class="table responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>LAB</td>
                                    <td>LAB TKJ</td>
                                    <td>
                                        <form action="">
                                            <a href="http://" class="btn btn-outline-warning btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
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