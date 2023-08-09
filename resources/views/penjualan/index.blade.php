@extends('layouts.app')
@section('title','Data Penjualan Baterai Mobil Pada Toko Rabin Baterai')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="table-responsive">
            <div class="card-header py-3">
                <h6 class="m-0 card-title font-weight-bold text-primary">Data Penjualan Dari Tahun 2021-2022</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('penjualan.tambah') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="col-md-12">
                    <table class="table table-bordered" id="bootstrap-data-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col-mb-1">No</th>
                                <th scope="col-mb-1">periode</th>
                                <th scope="col-mb-1">GS</th>
                                <th scope="col-mb-1">Vitra</th>
                                <th scope="col-mb-1">Incoe</th>
                                <th scope="col-mb-1">RCA</th>
                                <th scope="col-mb-1">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($no = 1)
                            @foreach ($penjualan as $index=>$row)
                                <tr>
                                    <td>{{ $index + $penjualan -> firstItem() }}</td>
                                    <td>{{ $row->periode }}</td>
                                    <td>{{ $row->gs }}</td>
                                    <td>{{ $row->vitra }}</td>
                                    <td>{{ $row->incoe }}</td>
                                    <td>{{ $row->rca }}</td>
                                    <td>
                                        <a href="{{ route('penjualan.edit',$row->id) }}" class="btn btn-warning" >
                                            <i class="fas fa-eye"></i></a>
                                        <a href="{{ route('penjualan.hapus',$row->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $penjualan->links() }}
                </div>
            </div>
        </div>
    </div>

<!-- Button trigger modal --
@endsection
