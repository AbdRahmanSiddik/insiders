@extends('layout.eduker')

@section('content')

<div class="container">
    <h2 class="text-center">UKM Terbaik</h2>
  <table class="table table-hover table-bordered" >
    <thead>
      <tr>
        <th>ukm</th>
        <th>nilai</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hasil as $data)
        <tr>
          <td>{{ $data['ukm'] }}</td>
          <td>{{ $data['nilai'] }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
