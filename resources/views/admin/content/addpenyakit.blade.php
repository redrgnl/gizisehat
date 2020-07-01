@extends('admin/index')

@section('content')
<div class="box box-solid box-info">
  <div class="box-body">
    <form role="form" method="post" action="/admin/tambah-data-penyakit">
      <div class="box-body">
        @csrf
        @error('namapenyakit')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="namapenyakit">Penyakit</label>
          <input type="text" class="form-control" id="namapenyakit" name="namapenyakit" placeholder="Masukkan Nama Penyakit">
        </div>
          
        @error('deskripsipenyakit')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="deskripsipenyakit">Deskripsi</label>
          <textarea class="textarea" placeholder="Masukkan Deskripsi Penyakit" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="deskripsipenyakit" id="deskripsipenyakit"></textarea>
        </div>
          
        @error('jenisdiet')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="jenisdiet">Jenis Diet</label>
          <textarea class="textarea" placeholder="Jenis Diet Yang Dianjurkan" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="jenisdiet" id="jenisdiet"></textarea>
        </div>
          
        @error('anjuran')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="anjuran">Makanan Yang Dianjurkan</label>
          <textarea class="textarea" placeholder="Jenis - Jenis Makanan Yang Dianjurkan" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="anjuran" id="anjuran"></textarea>
        </div>
          
        @error('larangan')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="larangan">Makanan Yang Dilarang</label>
          <textarea class="textarea" placeholder="Jenis - Jenis Makanan Yang Dilarang" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="larangan" id="larangan"></textarea>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection

<!-- Custom Javascript -->
@section('customjs')
<script>
tinymce.init({
    selector: '#deskripsipenyakit'
});
tinymce.init({
    selector: '#jenisdiet'
});
tinymce.init({
    selector: '#anjuran'
});
tinymce.init({
    selector: '#larangan'
});
</script>
@endsection