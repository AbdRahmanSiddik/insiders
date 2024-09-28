@extends('layout.kleon')

@section('content')
  <form action="/galeri/{{ $detail->token_galeri }}/edit" method="POST" enctype="multipart/form-data" novalidate class="card">
    @csrf
    <div class="card-header p-3 pb-0">
      <h4>Edit Galeri</h4>
    </div>
    <div class="card-body row bg-light-200">
      <div class="row col-lg-12 g-3 m-0">
        <div class="col-lg-12 mt-0">
          <label for="id_ukm" class="form-label">Nama Galeri</label>
          <select name="id_ukm" id="id_ukm" class="form-control">
              <option disabled selected>Pilih UKM</option>
            @foreach ($ukms as $item)
                <option value="{{ $item->id }}" {{ $detail->id_ukm == $item->id ? 'selected' : '' }}>{{ $item->nama_ukm }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-lg-12 mt-0">
          <label for="nama_galeri" class="form-label">Nama Galeri</label>
          <input type="text" name="nama_galeri" id="nama_galeri" class="form-control" value="{{ $detail->nama_galeri }}">
        </div>
        <div class="col-lg-12 mb-8">
          <label for="gambar_galeri" class="form-label">Gambar Galeri</label>
          <div class="col-sm-12 ">
            <label for="input-file" id="drop-area">
              <input type="file" name="gambar_galeri" accept="image/*" id="input-file" hidden>
              <div id="image-view" style="height: 200px; width: 200px">
                <img src="{{ asset('image/galeri/'.$detail->gambar_galeri) }}" width="100%" height="100%">
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-3">
        <Label for="deskripsi_galeri" class="form-label">Deskripsi Galeri</Label>
        <textarea name="deskripsi_galeri" id="editor" required>{{ $detail->deskripsi_galeri }}</textarea>
      </div>
    </div>
    <div class="card-footer text-body-secondary text-end">
      <a href="/berita" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
