@extends('layout.kleon')

@section('content')
    <div class="card border-0">
        <div class="card-header text-end">
            <a href="/berita" class="btn btn-warning">Back</a>
            <a href="/berita/{{ $detail->token_berita }}/edit" class="btn btn-secondary mx-2">Edit</a>
        </div>
        <div class="card-body">
            <div class="d-flex align-items-center gap-4 flex-wrap">
                <div class="avatar-img avatar-xl rounded-2 overflow-hidden flex-shrink-0" style="width: 200px; height: 200px;">
                    <img src="{{ asset('image/berita/'.$detail->gambar_berita) }}" alt="img" class="w-100"/>
                </div>
                <div class="card-content">
                    <h6 class="mb-1">{{ $detail->nama_berita }}</h6>
                    <p>Post on : <small class="d-inline-block text-gray fs-14 fw-normal">{{ $detail->created_at }}</small></p>
                </div>
                <div class="ms-auto mb-auto">
                    <div class="badge {{ $detail->status_post == 1 ? 'badge-soft-info' : 'badge-soft-danger' }}">{{ $detail->status_post == 1 ? 'Posted' : 'Not Posted' }}</div>
                </div>
            </div>

            <p class="d-flex align-items-center fs-14 fw-semibold text-black mt-4 flex-wrap g-4">
                @foreach ($detail->kategoriberita as $unit)
                <h4 class="badge {{ random_badge() }}"><strong>{{ $unit->nama_kategori }}</strong></h4>
                @endforeach
            </p>

            <hr />

            <div >
                {!! $detail->deskripsi_berita !!}
            </div>
        </div>
    </div>
@endsection
