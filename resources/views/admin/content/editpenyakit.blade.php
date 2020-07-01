@extends('admin/index')

@section('content')
<div class="box box-solid box-info">
  <div class="box-body">
    <form role="form" method="post" action="/admin/update-data-penyakit">
      <div class="box-body">
        @foreach($penyakit as $pny)
        @csrf
        @error('namapenyakit')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="namapenyakit">Penyakit</label>
          <input type="hidden" name="idpenyakit" value="{{ $pny->id_penyakit }}">
          <input type="text" class="form-control" id="namapenyakit" name="namapenyakit" value="{{ $pny->nama_penyakit }}" placeholder="Masukkan Nama Penyakit">
        </div>
        
        @error('deskripsipenyakit')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="deskripsipenyakit">Deskripsi</label>
          <textarea class="textarea" placeholder="Masukkan Deskripsi Penyakit" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="deskripsipenyakit" id="deskripsipenyakit">{{ $pny->deskripsi_penyakit }}</textarea>
        </div>
          
        @error('jenisdiet')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="jenisdiet">Jenis Diet</label>
          <textarea class="textarea" placeholder="Jenis Diet Yang Dianjurkan" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="jenisdiet" id="jenisdiet">{{ $pny->jenis_diet }}</textarea>
        </div>
          
        @error('anjuran')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="anjuran">Makanan Yang Dianjurkan</label>
          <textarea class="textarea" placeholder="Jenis - Jenis Makanan Yang Dianjurkan" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="anjuran" id="anjuran">{{ $pny->anjuran_makanan }}</textarea>
        </div>
          
        @error('larangan')
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fa fa-ban"></i> {{ $message }}
          </div>
        @enderror
        <div class="form-group">
          <label for="larangan">Makanan Yang Dilarang</label>
          <textarea class="textarea" placeholder="Jenis - Jenis Makanan Yang Dilarang" style="width: 100%; height: 100px; border: 1px solid #dddddd; padding: 10px;" name="larangan" id="larangan">{{ $pny->larangan_makanan }}</textarea>
        </div>
        @endforeach
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