@extends('layouts.app')
@section('title','Data Penjualan Baterai Mobil Pada Toko Rabin Baterai')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan Dari Tahun 2021-2022</h6>
        </div>
        <div class="card-body">
            <a href="{{ route('penjualan.tambah') }}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col-mb-2">#</th>
                            <th scope="col-mb-2">periode</th>
                            <th scope="col-mb-2">GS</th>
                            <th scope="col-mb-2">Vitra</th>
                            <th scope="col-mb-2">Incoe</th>
                            <th scope="col-mb-2">RCA</th>
                            <th scope="col-mb-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++  }}</td>
                                <td>{{ $row->periode }}</td>
                                <td>{{ $row->gs }}</td>
                                <td>{{ $row->vitra }}</td>
                                <td>{{ $row->incoe }}</td>
                                <td>{{ $row->rca }}</td>
                                <td>
                                    <a href="{{ route('penjualan.edit',$row->id) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('penjualan.hapus',$row->id) }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection