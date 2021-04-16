@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5 class="font-weight bold">Perhatian !!!</h5>
                        <h5>Silahkan masukan nilai ulangan siswa</h5>
                    </div>
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Siswa</th>
                                    <th>ulangan harian -1</th>
                                    <th>ulangan harian -2</th>
                                    <th>ulangan harian -3</th>
                                    <th>uts</th>
                                    <th>uas</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <form action="" method="post">
                                        @csrf
                                        <td>
                                            <input type="text" name="ulh_1" id="" class="form-control" value="John Doe" readonly>
                                        </td>
                                        <td>
                                            <input type="text" name="ulh_1" id="" class="form-control">
                                        </td>
                                        <td><input type="text" name="ulh_1" id="" class="form-control"></td>
                                        <td><input type="text" name="ulh_1" id="" class="form-control"></td>
                                        <td><input type="text" name="ulh_1" id="" class="form-control"></td>
                                        <td><input type="text" name="ulh_1" id="" class="form-control"></td>
                                        <td>
                                            <button type="submit" class="btn btn-info btn-sm">save</button>
                                        </td>
                                    </form>
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