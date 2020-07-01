@extends('admin/index')

@section('content')
<div class="row">
  <div class="col-md-4">
    <div class="box box-info box-solid">
      <div class="box-body">
        <div class="callout callout-info">
          <h4>Selamat Datang!</h4>

          <p>Melanjutkan ke <strong>Halaman Manajemen Penyakit</strong>, Silahkan Tekan Tombol Berikut </p>
          <div class="pull-right">
            <a href="/admin/halaman-manajemen-penyakit" class="btn btn-primary" style="width: 55px; border-color: white;" title="Manajemen Penyakit">
              <i class="fa fa-heartbeat" style="font-size: 30px"></i>
            </a>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="col-md-4">
    <div class="box box-info box-solid">
      <div class="box-body">
        <div class="callout callout-success">
          <h4>Halaman Utama</h4>

          <p>Melanjutkan ke <strong>Halaman Homepage GIZI SEHAT</strong>, Silahkan Tekan Tombol Berikut </p>
          <div class="pull-right">
            <a href="/" class="btn btn-success" style="width: 55px; background-color: #008d4c; border-color: white;" title="Halaman Pencarian">
              <i class="fa fa-home" style="font-size: 30px"></i>
            </a>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="col-md-4">
    <div class="small-box bg-aqua">
      <div class="inner">
        <p>&ensp;</p>
        <h3>{{ $jumlahpenyakit }} <i class="fa fa-heartbeat"></i></h3>
        <p>Jumlah Data Penyakit</p>
      </div>
      <div class="icon">
        <i class="fa fa-heartbeat"></i>
      </div>
      <a class="small-box-footer">GIZI SEHAT</a>
    </div>
  </div>
  
</div>
@endsection

@section('customjs')

@endsection