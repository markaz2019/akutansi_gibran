@extends('master')

@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Laporan TELKOMSEL</h1>
  <p class="mb-4">System Management MARKAZ</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
    <br>
    <form action="/cari" method="POST">
      @csrf
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <input class="form_date" type="text" name="from" placeholder="Mulai" onfocus="(this.type='date')">
          <input class="form_date" type="text" name="to" placeholder="Sampai" onfocus="(this.type='date')">
          <input class="btn btn-primary" type="submit" value="Cari">
        </div>
        <div class="col-1">
          <a href="/cari/export_excel" class="btn btn-primary">EXCEL</a>
        </div>
        <div class="col-1">
          <button class="btn btn-primary" onclick="printContent('div1')">PDF</button>
        </div>
        <div class="col-1"></div>
      </div>
    </form>
    <hr>
    <div class="card-body">
      <div class="table-responsive" id="div1">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Modul</th>
              <th>Jml Trx</th>
              <th>SPL</th>
              <th>Selisih Trx</th>
              <th>Saldo Awal</th>
              <th>Deposit</th>
              <th>Pemakaian </th>
              <th>Saldo Akhir CS</th>
              <th>Selisih Akhir</th>
              <th>Jenis</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($report as $value)
            <tr>
              <td>{{$value->nomor}}</td>
              <td>{{$value->modul}}</td>
              <td>@currency($value->jml_trx)</td>
              <td>@currency($value->spl)</td>
              <td>@currency($value->jml_trx + $value->spl)</td>
              <td>@currency($value->saldo_awal)</td>
              <td>@currency($value->deposit)</td>
              <td>@currency($value->pemakaian)</td>
              <td>@currency($value->saldo_akhir_cs)</td>
              <td>@currency($value->saldo_akhir_cs + $value->pemakaian - $value->deposit - $value->saldo_awal)</td>
              <td>{{$value->jenis}}</td>
              <td>{{$value->tanggal}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<style>
  .form_date {
    width: 32% !important;
    height: 100% !important;
    border: 1px solid #cccccc !important;
    border-radius: 11px !important;
    text-align: center !important;
  }
</style>
<!-- /.container-fluid -->
@endsection