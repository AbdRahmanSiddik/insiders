@extends('layout.kleon')

@section('content')
<div class="card border-0 p-5">
    <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
      <h4 class="mb-0">List Galeri</h4>
      <div class="ms-auto d-flex align-items-center gap-3">
        <a href="/galeri/tambah" class="btn btn-primary">+ Tambah Galeri</a>

      </div>
    </div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="table-2" class="display text-center">
          <thead>
            <tr>
              <th>Nama Galeri</th>
              <th class="ps-6">Dari UKM</th>
              <th class="text-center px-6">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($galeris as $item)
              <tr>
                <td>
                  <div class="employee d-flex gap-2 flex-wrap">
                    <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                      <img src="{{ asset('image/galeri/'.$item->gambar_galeri) }}" alt="img" width="50">
                    </div>
                    <div class="description ps-3">
                      <h6 class="mb-0">{{ $item->nama_galeri }}</h6>
                      <small><a href="/galeri/{{ $item->token_galeri }}/view" class="btn btn-primary-100 btn-lg rounded-0 text-warning p-1 m-0">Cek Detail--></a></small>
                    </div>
                  </div>
                </td>
                <td>
                    {{ $item->nama_ukm }}
                </td>
                <td class="text-center">
                  <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                      <i class="bi bi-three-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu p-0">
                      <a href="/galeri/{{ $item->token_galeri }}/view" class="dropdown-item">View</a>
                      <a class="dropdown-item" href="/galeri/{{ $item->token_galeri }}/edit">Edit</a>
                      <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{ $item->token_galeri }}">Remove</button>
                    </div>
                  </div>
                </td>
              </tr>

              {{-- to delete --}}
              <div class="modal fade" id="exampleModal{{ $item->token_galeri }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-2" id="exampleModalLabel">Hapus {{ $item->nama_galeri }}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                      <div>
                        <p>Apakah anda yakin ingin menghapus data <strong>{{ $item->nama_galeri }}</strong> ?<br></p>
                        <span class="text-danger">Semua data akan terhapus secara permanen</span>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <a href="/galeri/{{ $item->token_galeri }}/remove" class="btn btn-primary">Save changes</a>
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