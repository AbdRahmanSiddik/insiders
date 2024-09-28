@extends('layout.kleon')

@section('content')
  <form action="/berita/{{ $detail->token_berita }}/edit" method="POST" enctype="multipart/form-data" novalidate class="card">
    @csrf
    <div class="card-header p-3 pb-0">
      <h4>Tambah Berita</h4>
    </div>
    <div class="card-body row">
      <div class="row col-lg-6 g-3 m-0">
        <div class="col-lg-12 mt-0">
          <label for="nama_berita" class="form-label">Nama Berita</label>
          <input type="text" name="nama_berita" id="nama_berita" value="{{ $detail->nama_berita }}" class="form-control">
        </div>
        <div class="col-lg-12 mb-8">
          <label for="gambar_berita" class="form-label">Gambar Berita</label>
          <div class="col-sm-12 ">
            <label for="input-file" id="drop-area">
              <input type="file" name="gambar_berita" accept="image/*" id="input-file" hidden>
              <div id="image-view" style="height: 200px; width: 200px">
                <img src="{{ asset('image/berita/'.$detail->gambar_berita) }}" width="100%" height="100%">
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class="row col-lg-6 ps-5">
        <div class="col-lg-12 mt-0 mb-0 pb-0">
          <label for="status_post" class="form-label">Status Post</label>
          <select name="status_post" id="status_post" class="form-control">
            <option disabled selected>Pilih Status</option>
            <option value="1" {{ $detail->status_post == 1 ? 'selected' : '' }}>Posted</option>
            <option value="0">Not Posted</option>
          </select>
        </div>
        <div class="col-lg-12 mt-0">
          <div class="form-label ms-0 ps-0 mb-0 pb-0">Kategori Berita</div>
          <div class="d-flex mt-2 pt-0 flex-wrap g-4 flex-row justify-content-start align-items-start">
            @foreach ($kategoriBeritas as $item)
              <label class="form-check-label p-2 pt-0 pb-0 mt-0" for="{{ $item->nama_kategori }}">
                <input name="kategori[]" class="form-check-input" type="checkbox" value="{{ $item->id }}"
                  id="{{ $item->nama_kategori }}" data-id="{{ $item->id }}" {{ $detail->kategoriBerita->contains($item->id) ? 'checked' : '' }}>
                {{ $item->nama_kategori }}
              </label>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-3">
        <Label for="deskripsi_berita" class="form-label">Isi Berita</Label>
        <textarea name="deskripsi_berita" id="editor" required>{{ $detail->deskripsi_berita }}</textarea>
      </div>
    </div>
    <div class="card-footer text-body-secondary text-end">
      <a href="/berita" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
