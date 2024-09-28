@extends('layout.eduker')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Masukkan Preferensi UKM Anda</h2>
    <form action="{{ route('student.recommendations') }}" method="POST">
        @csrf
        @foreach ($kriteria as $k)
            <div class="mb-2">
                <label for="kriteria{{ $k->id }}" class="form-label">{{ $k->nama }}</label>
                <input type="number" id="kriteria{{ $k->id }}" name="preferences[{{ $k->id }}]" class="form-control"  min="1" max="10" required>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Lihat Rekomendasi</button>
    </form>
</div>

@endsection
