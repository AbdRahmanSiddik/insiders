@extends('layout.kleon')

@section('content')
  <div class="card border-0 p-5">
    <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
      <h4 class="mb-0">List Berita</h4>
      <div class="ms-auto d-flex align-items-center gap-3">
        <a href="/berita/tambah" class="btn btn-primary">+ Tambah Berita</a>

      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="table-2" class="display text-center">
          <thead>
            <tr>
              <th>Nama Berita</th>
              <th class="ps-6">Kategori Berita</th>
              <th class="ps-6">Status</th>
              <th class="text-center px-6">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($beritas as $item)
              <tr>
                <td>
                  <div class="employee d-flex gap-2 flex-wrap">
                    <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                      <img src="{{ asset('image/berita/'.$item->gambar_berita) }}" alt="img" width="50">
                    </div>
                    <div class="description ps-3">
                      <h6 class="mb-0">{{ $item->nama_berita }}</h6>
                      <small><a href="/berita/{{ $item->token_berita }}/view" class="btn btn-primary-100 btn-lg rounded-0 text-warning p-1 m-0">Cek Detail--></a></small>
                    </div>
                  </div>
                </td>
                <td>
                  <ul class="d-flex flex-row align-items-center gap-2 flex-wrap">
                    @foreach ($item->kategoriberita as $unit)
                      <li class="badge {{ random_badge() }}">{{ $unit->nama_kategori }}</li>
                    @endforeach
                  </ul>
                </td>
                <td>
                    <div class="badge {{ $item->status_post == 1 ? 'badge-soft-info' : 'badge-soft-danger' }}">{{ $item->status_post == 1 ? 'Posted' : 'Not Posted' }}</div>
                </td>
                <td class="text-center">
                  <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                      <i class="bi bi-three-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu p-0">
                      <a href="/berita/{{ $item->token_berita }}/view" class="dropdown-item">View</a>
                      <a class="dropdown-item" href="/berita/{{ $item->token_berita }}/edit">Edit</a>
                      <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $item->token_berita }}">Remove</button>
                    </div>
                  </div>
                </td>
              </tr>

              {{-- to delete --}}
              <div class="modal fade" id="exampleModal{{ $item->token_berita }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-2" id="exampleModalLabel">Hapus {{ $item->nama_berita }}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <div>
                        <p>Apakah anda yakin ingin menghapus data <strong>{{ $item->nama_berita }}</strong> ?<br></p>
                        <span class="text-danger">Semua data akan terhapus secara permanen</span>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="/berita/{{ $item->token_berita }}/remove" class="btn btn-primary">Save changes</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
