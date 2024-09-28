@extends('layout.kleon')

@section('content')
  <div class="card">
    <div class="card-header p-2 d-flex align-items-center">
      <h5>List Nilai UKM</h5>
      <button type="button" class="ms-auto btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">+ Tambah Nilai UKM</button>
    </div>

    <!-- Modal -->
    <div class="modal modal-lg fade" id="largeModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="POST">
            @csrf
            <div class="modal-body">
              <div class="mb-2">
                <label for="id_ukm" class="form-label">Nama UKM</label>
                <select name="id_ukm" id="id_ukm" class="form-select">
                  <option selected disabled>Pilih UKM</option>
                  @foreach ($nilai_ukm as $item)
                    @php
                      // Memeriksa apakah UKM sudah memiliki nilai pada semua kriteria
                      $hasAllValues = true;
                      foreach ($kriteria as $k) {
                          if (!$item->nilai->contains('kriteria_id', $k->id)) {
                              $hasAllValues = false;
                              break;
                          }
                      }
                    @endphp
                    <option value="{{ $item->id }}" {{ $hasAllValues ? 'disabled' : '' }}>{{ $item->nama_ukm }}</option>
                  @endforeach
                </select>
              </div>
              @foreach ($kriteria as $k)
                <div class="mb-2">
                  <label for="kriteria{{ $k->id }}" class="form-label">{{ $k->nama }}</label>
                  <input type="number" id="kriteria{{ $k->id }}" name="nilaikriteria[{{ $k->id }}]"
                    class="form-control">
                </div>
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light-200 text-danger btn-sm px-2"
                data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm  px-2">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>UKM</th>
            @foreach ($kriteria as $kr)
              <th>{{ getFirstWord($kr->nama) }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($nilai_ukm as $ukm)
            <tr>
              <td>{{ $ukm->nama_ukm }}</td>
              @foreach ($ukm->nilai as $n)
                <td>{{ round($n->nilai) }}</td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
