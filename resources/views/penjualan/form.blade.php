@extends('layouts.app')
@section('title', 'Tambah Data')
@section('content')
    <form action="{{ isset($penjualan) ? route('penjualan.edit.update',$penjualan->id) : route('penjualan.tambah.simpan') }}" method="post">
        @csrf()
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($penjualan) ? 'Form Edit Penjualan' : 'Form Tambah Penjualan' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="periode">Periode</label>
                            <input type="month" class="form-control" id="periode" name="periode" value="{{ isset($penjualan) ? $penjualan->periode : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="gs">GS</label>
                            <input type="text" class="form-control" id="gs" name="gs" value="{{ isset($penjualan) ? $penjualan->gs : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="vitra">Vitra</label>
                            <input type="text" class="form-control" id="vitra" name="vitra" value="{{ isset($penjualan) ? $penjualan->vitra : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="incoe">Incoe</label>
                            <input type="text" class="form-control" id="incoe" name="incoe" value="{{ isset($penjualan) ? $penjualan->incoe : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="rca">RCA</label>
                            <input type="text" class="form-control" id="rca" name="rca" value="{{ isset($penjualan) ? $penjualan->rca : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection



