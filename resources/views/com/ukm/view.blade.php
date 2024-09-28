@extends('layout.eduker')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
    data-background="{{ asset('eduker') }}/assets/img/breadcrumb/newbreadcrumb.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content text-center p-relative z-index-1">
            <h3 class="breadcrumb__title">UKM</h3>
            <div class="breadcrumb__list">
              <span><a href="/">Home</a></span>
              <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
              <span><a href="/ukm/all">UKM</a></span>
              @if ($kategori->id == $id)
                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                <span>{{ $kategori->nama_kategori }}</span>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->

  <!-- team area start -->
  <section class="team__area pt-115">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="section__title-wrapper-2 mb-40">
            <span class="section__title-pre-2">Top Unit Kegiatan Mahasiswa</span>
            <h3 class="section__title-2">Semua Unit Kegiatan Mahasiswa UNIBA Madura.</h3>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="team__wrapper mb-45 pl-70">
            <p>Placerat veritatis ullamco rutrum quia illo, aenean eaque necessitatibus aptent vehicula porta?
              Sollicitudin id, laboris commodi! </p>
          </div>
        </div>
      </div>
      <div class="row">

        @foreach ($ukms as $item)
          <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
            <div class="team__item text-center mb-40">
              <div class="team__thumb">
                {{-- <div class="team__shape ">
                  <img src="{{ asset('eduker') }}/assets/img/team/team-shape-1.png" alt="">
                </div> --}}
                <img src="{{ asset('image/ukm/' . $item->logo_ukm) }}" width="230px" alt="">
                <div class="team__social transition-3">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                </div>
              </div>
              <div class="team__content">
                <h3 class="team__title">
                  <a href="/ukm/{{ $item->token_ukm }}/detail">{{ $item->nama_ukm }} </a>
                </h3>
                <span class="team__designation"><a href="{{ url($item->link_pendaftaran) }}" target="_blank">Join Now</a></span>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- team area end -->
@endsection
