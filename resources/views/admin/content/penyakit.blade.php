@extends('admin/index')

@section('content')
<!-- Default box -->
<div class="box box-solid box-info">
  <div class="box-body">
    <div class="pull-left">
      <a href="/admin/halaman-tambah-penyakit" class="btn btn-primary">Tambah Data</a>
    </div>
    <br><br>
    <table id="tbl_penyakit" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
            <th style="width: 20px">No.</th>
            <th>Nama Penyakit</th>
            <th>Deskripsi</th>
            <th>Jenis Diet</th>
            <th>Anjuran</th>
            <th>Larangan</th>
            <th style="width: 70px">#</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 0?>
        @foreach($penyakit as $pny)
        <?php $no++ ?>
        <tr>
          <td style="width: 20px">{{ $no }}</td>
          <td>{{ $pny->nama_penyakit }}</td>
          <td>{{ $pny->deskripsi_penyakit }}</td>
          <td>{{ $pny->jenis_diet }}</td>
          <td>{{ $pny->anjuran_makanan }}</td>
          <td>{{ $pny->larangan_makanan }}</td>
          <td style="width: 70px">
            <a class="btn btn-primary" href="/admin/halaman-edit-penyakit/{{ $pny->id_penyakit }}"><i class="fa fa-gears"></i></a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete{{ $pny->id_penyakit }}"><i class="fa fa-trash"></i></button>
          </td>
        </tr> 
        <!-- Modal Delete -->
        <div class="modal modal-danger fade" id="modal-delete{{ $pny->id_penyakit }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data?</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Akan Menghapus Data "<strong>{{ $pny->nama_penyakit }}" ?</strong></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <a href="/admin/delete-data-penyakit/{{ $pny->id_penyakit }}" class="btn btn-outline">Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Delete -->
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

<!-- Custom Javascript -->
@section('customjs')
<script>
$(document).ready(function() {
    $('#tbl_penyakit').DataTable();
} );
</script>
@endsection