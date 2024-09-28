@extends('layout.eduker')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Rekomendasi UKM</h2>
    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>UKM</th>
            <th>Nilai</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($hasil as $data)
            <tr>
                <td>{{ $data['ukm_id'] }}</td>
                <td>{{ $data['nilai'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
