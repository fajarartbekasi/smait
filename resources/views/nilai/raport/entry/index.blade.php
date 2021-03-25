@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Silahkan input nilai raport</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Nama Siswa</td>
                                    <td colspan="3" class="text-center">Pengetahuan</td>
                                    <td colspan="3" class="text-center">Keterampilan</td>
                                    <td>Option</td>
                                </tr>
                                <tr>

                                    <td class="border-0"></td>
                                    <td>Nilai</td>
                                    <td>Predikat</td>
                                    <td>Deskripsi</td>
                                    <td>Nilai</td>
                                    <td>Predikat</td>
                                    <td class="">Deskripsi</td>
                                    <td class="border-0"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="">
                                    <tr>
                                        <td>
                                            <input type="text" name="" id=""  readonly value="John Doe" class="form-control">
                                        </td>
                                        <td ><input type="text" name="" id=""  readonly value="70" class="form-control "></td>
                                        <td ><input type="text" name="" id=""  readonly value="75" class="form-control "></td>
                                        <td >
                                            <input type="text" name="" id=""  class="form-control ">
                                        </td>
                                        <td ><input type="text" name="" id=""  readonly value="70" class="form-control "></td>
                                        <td ><input type="text" name="" id=""  readonly value="75" class="form-control "></td>
                                        <td >
                                            <input type="text" name="" id=""  class="form-control ">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-info btn-sm">Save</button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection