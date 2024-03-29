@extends('master')

@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Laporan Kisel Baru (selisih ss CS dan Hitungan)</h1>
  <p class="mb-4">System Management MARKAZ</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
    <br>
    <form action="/cari_kisel_selisih" method="POST">
      @csrf
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          <input class="form_date" type="text" name="from" placeholder="Mulai" onfocus="(this.type='date')">
          <input class="form_date" type="text" name="to" placeholder="Sampai" onfocus="(this.type='date')">
          <input class="btn btn-primary" type="submit" value="Cari">
        </div>
        <div class="col-1">
<<<<<<< HEAD
          <a href="/cari_kisel_selisih/export_excel" class="btn btn-primary">EXCEL</a>
        </div>
        <div class="col-1">
          <button class="btn btn-primary" onclick="printContent('div1')">PDF</button>
=======
          <a href="/cari_kisel_selisih/export_excel" class="btn btn-primary">Export Excel</a>
        </div>
        <div class="col-1">
          <button class="btn btn-primary" onclick="printContent('div1')">PRINT</button>
>>>>>>> 8125ed69c49f2cf4684be7aaecf2c75e9f233a7b
        </div>
        <div class="col-1"></div>
      </div>
    </form>
    <hr>
    <div class="card-body">
      <div class="table-responsive" id="div1">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Keterangan</th>
              <th>10K</th>
              <th>15K</th>
              <th>25K</th>
              <th>30K</th>
              <th>40K</th>
              <th>50K</th>
              <th>75K</th>
              <th>100K</th>
              <th>150K</th>
              <th>200K</th>
              <th>300K</th>
              <th>500K</th>
              <th>1000K</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sales as $value)
            <tr>
              <td>{{$value->ket}}</td>
              <td>@currency($value->sepuluh)</td>
              <td>@currency($value->lima_belas)</td>
              <td>@currency($value->dua_lima)</td>
              <td>@currency($value->tiga_puluh)</td>
              <td>@currency($value->empat_puluh)</td>
              <td>@currency($value->lima_puluh)</td>
              <td>@currency($value->tujuh_lima)</td>
              <td>@currency($value->seratus)</td>
              <td>@currency($value->seratus_lima)</td>
              <td>@currency($value->dua_ratus)</td>
              <td>@currency($value->tiga_ratus)</td>
              <td>@currency($value->lima_ratus)</td>
              <td>@currency($value->satu_juta)</td>
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