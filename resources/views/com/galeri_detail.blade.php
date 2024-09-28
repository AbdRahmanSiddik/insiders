@extends('layout.eduker')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
    data-background="{{ asset('eduker') }}/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content text-center p-relative z-index-1">
            <h3 class="breadcrumb__title">Galeri</h3>
            <div class="breadcrumb__list">
              <span><a href="/">Home</a></span>
              <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
              <span>{{ $detail->nama_galeri }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->


  <!-- course area start -->
  <section class="course__area pt-115 pb-90">
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-8">
          <div class="course__wrapper">
            <div class="page__title-content mb-25">
              <div class="breadcrumb__list breadcrumb__list-2 mb-10">
                <span><a href="#">Home</a></span>
                <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                <span>{{ $detail->nama_galeri }}</span>
              </div>
              <span class="breadcrumb__title-pre">{{ $detail->nama_ukm }}</span>
              <h5 class="breadcrumb__title-2">{{ $detail->nama_galeri }}</h5>
            </div>
            <div class="course__meta-2 d-sm-flex align-items-center mb-30">
              {{-- <div class="course__teacher-3 d-flex align-items-center mr-70 mb-30">
                <div class="course__teacher-thumb-3 mr-15">
                  <img src="{{ asset('eduker') }}/assets/img/course/tutor/course-tutor-1.jpg" alt="">
                </div>
                <div class="course__teacher-info-3">
                  <h5>Teacher</h5>
                  <p><a href="#">Elon Gated</a></p>
                </div>
              </div> --}}
              <div class="course__update mr-80 mb-30">
                <h5>Last Update:</h5>
                <p>{{ $detail->created_at->format('d, M Y') }}</p>
              </div>
              <div class="course__rating-2 mb-30">
                <h5>Review:</h5>
                <div class="course__rating-inner d-flex align-items-center">
                  <ul>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                  </ul>
                  <p>4.5</p>
                </div>
              </div>
            </div>
            <div class="course__img w-img mb-30">
              <img src="{{ asset('image/galeri/' . $detail->gambar_galeri) }}" alt="">
            </div>
            <div>
              {!! $detail->deskripsi_galeri !!}
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4">
          <div class="course__sidebar pl-70 p-relative">
            <div class="course__shape">
              <img class="course-dot" src="{{ asset('eduker') }}/assets/img/course/course-dot.png" alt="">
            </div>
            <div class="course__sidebar-widget-2 white-bg mb-20">
              <div class="course__sidebar-course">
                <h3 class="course__sidebar-title">Galeri Terbaru</h3>
                <ul>
                  @foreach ($recent as $item)
                    <li>
                      <div class="course__sm d-flex align-items-center mb-30">
                        <div class="course__sm-thumb mr-20">
                          <a href="course-details.html">
                            <img src="{{ asset('image/galeri/'.$item->gambar_galeri) }}" alt="">
                          </a>
                        </div>
                        <div class="course__sm-content">
                          <div class="course__sm-rating">
                            <ul>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                              <li><a href="#"> <i class="fa-solid fa-star"></i> </a></li>
                            </ul>
                          </div>
                          <h5><a href="course-details.html">{{ $item->nama_galeri }}</a></h5>
                          <div class="course__sm-price">
                            <span>{{ $item->nama_ukm }}</span>
                          </div>
                        </div>
                      </div>
                    </li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- course area end -->
@endsection
