@extends('layout.kleon')

@section('content')
    <div class="card border-0 p-5">
        <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
            <h4 class="mb-0">List Kategori Berita</h4>
            <div class="ms-auto d-flex align-items-center gap-3">
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">+ Tambah Kategori Berita</button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header bg-light-500">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Tambah Kategori Berita</h5>
                        <button type="button"
                            class="aside_close btn btn-danger z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center"
                            data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                    </div>
                    <div class="offcanvas-body bg-white p-0">
                        <form method="POST" action="/kategori/berita" class="bg-light-200 p-4">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input name="nama_kategori" type="text" id="nama_kategori"
                                    class="form-control @error('nama_kategori') is-invalid @enderror">
                                @error('nama_kategori')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="table-2" class="display text-center">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class="text-center">Jumlah Berita</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriBeritas as $item)
                            <tr>
                                <td>{{ $item->nama_kategori }}</td>
                                <td class="text-center">{{ $item->berita_count }}</td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu p-0">
                                            <a class="dropdown-item" data-bs-toggle="offcanvas"
                                                href="#offcanvasExample{{ $item->id }}" role="button"
                                                aria-controls="offcanvasExample">Edit</a>
                                            <button type="button" class="dropdown-item text-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $item->id }}">Remove</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            {{-- to delete --}}
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-2" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div>
                                                <p>Apakah anda yakin ingin menghapus data
                                                    <strong>{{ $item->nama_kategori }}</strong> ?<br>
                                                </p>
                                                <span class="text-danger">Semua data akan terhapus secara permanen</span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="/kategori/{{ $item->id }}/berita_remove" class="btn btn-primary">Save
                                                changes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- offcanvaf to edit --}}
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample{{ $item->id }}" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header bg-light-500">
                                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Kategori Berita {{ $item->nama_kategori }}</h5>
                                    <button type="button"
                                        class="aside_close btn btn-danger z-index-9 rounded-circle p-0 m-0 d-flex align-items-center justify-content-center"
                                        data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                </div>
                                <div class="offcanvas-body bg-white">
                                    <form method="POST" action="/kategori/{{ $item->id }}/berita_edit" class="bg-light-200">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama{{ $item->id }}" class="form-label">Nama Kategori</label>
                                            <input name="nama_kategori" value="{{ $item->nama_kategori }}" type="text"
                                                class="form-control" id="nama{{ $item->id }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
