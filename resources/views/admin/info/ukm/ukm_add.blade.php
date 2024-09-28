@extends('layout.kleon')

@section('content')
  <form action="/ukm/tambah" method="POST" enctype="multipart/form-data" novalidate class="card">
    @csrf
    <div class="card-header p-3 pb-0">
      <h4>Tambah UKM</h4>
    </div>
    <div class="card-body row">
      <div class="row col-lg-6 g-3 m-0">
        <div class="col-lg-12 mt-0">
          <label for="nama_ukm" class="form-label">Nama UKM</label>
          <input type="text" name="nama_ukm" id="nama_ukm" class="form-control">
        </div>
        <div class="col-lg-12 mb-8">
          <label for="logo_ukm" class="form-label">Logo UKM</label>
          <div class="col-sm-12 ">
            <label for="input-file" id="drop-area">
              <input type="file" name="logo_ukm" accept="image/*" id="input-file" hidden>
              <div id="image-view" style="height: 200px; width: 200px">
                <img src="{{ asset('kleon/assets/img/svg/cloud-upload.svg') }}" width="100%" height="100%">
              </div>
            </label>
          </div>
        </div>
      </div>
      <div class="row col-lg-6 mt-2 ps-5">
        <div class="form-label ms-0 ps-0 mb-0 pb-0">Kategori UKM</div>
        <div id="kategori" class="d-flex mt-0 pt-0 flex-wrap g-4 flex-row justify-content-start align-items-start">
          @foreach ($kategoriUkms as $item)
            <label class="form-check-label p-2 pt-0 pb-0 mt-0" for="{{ $item->nama_kategori }}">
              <input name="kategori[]" class="form-check-input" type="checkbox" value="{{ $item->id }}"
                id="{{ $item->nama_kategori }}" data-id="{{ $item->id }}">
              {{ $item->nama_kategori }}
            </label>
          @endforeach
        </div>
      </div>
      <div class="row col-lg-12 mt-4">
        <div class="col-lg-6">
          <label for="link_pendaftaran" class="form-label">Link Pendaftaran</label>
          <input type="text" name="link_pendaftaran" id="link_pendaftaran" class="form-control">
        </div>
        <div class="col-lg-6">
          <label for="status_ukm" class="form-label">Status UKM</label>
          <select name="status_ukm" id="status_ukm" class="form-control">
            <option disabled selected>Pilih Status</option>
            <option value="1">Aktif</option>
            <option value="0">Non Aktif</option>
          </select>
        </div>
      </div>
      <div class="col-lg-12 mt-3">
        <Label for="deskripsi_ukm" class="form-label">Deskripsi UKM</Label>
        <textarea name="deskripsi_ukm" id="editor" required></textarea>
      </div>
    </div>
    <div class="card-footer text-body-secondary text-end">
      <a href="/ukm" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
