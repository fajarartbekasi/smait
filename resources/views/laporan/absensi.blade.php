@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>SMAIT THORIQ BIN ZIYAD
                        <br>
                        Toyogiri Selatan, Kelurahan Jatimulya, Kabupaten Bekasi Kode Pos 17515</h3>
                    <hr>
                </b></P>
        </div>
        <u>
            <h4>Laporan Absensi Guru</h4>
        </u>
        @if (request('tgl_awal'))
        <small>dari tanggal {{ request('tgl_awal') }} sampai tanggal {{ request('tgl_akhir') }}</small>
        @endif


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NUPTK</th>
                    <th>Nama Guru</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($absensi as $get)
                    <tr>
                        <td>{{$get->guru->nuptk}}</td>
                        <td>{{$get->guru->user->name}}</td>
                        <td>{{$get->absen}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection