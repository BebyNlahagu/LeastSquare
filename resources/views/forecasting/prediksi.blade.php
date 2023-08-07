@extends('layouts.app')
@section('title','Prediksi Penjualan Baterai Mobil Di Periode Berikutnya')
@section('content')
<div class="card shadow mb-4">
    <div class="table-responsive">
        <div class="card-header py-3">
            <h6 class="m-0 card-title font-weight-bold text-primary">Prediksi Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md">
                  <div class="form-floating">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                          <option selected>Jenis Baterai</option>
                          <option value="1">GS</option>
                          <option value="2">Vitra</option>
                          <option value="3">Incoe</option>\
                          <option value="4">RCA</option>
                        </select>
                        <label for="floatingSelectGrid">Pilih Baterai</label>
                      </div>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                      <option selected>Bulan</option>
                      <option value="1">Januari</option>
                      <option value="2">Fembruari</option>
                      <option value="3">Maret</option>\
                      <option value="4">April</option>
                      <option value="5">Mei</option>
                      <option value="6">Juni</option>
                      <option value="1">Juli</option>
                      <option value="2">Agustus</option>
                      <option value="3">September</option>\
                      <option value="4">Oktober</option>
                      <option value="5">November</option>
                      <option value="6">Desember</option>
                    </select>
                    <label for="floatingSelectGrid">Periode</label>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Hitung</button>
        </div>
    </div>
</div>
@endsection
