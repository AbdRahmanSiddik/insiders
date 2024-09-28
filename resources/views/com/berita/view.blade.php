@extends('layout.eduker')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
    data-background="{{ asset('eduker') }}/assets/img/breadcrumb/newbreadcrumb2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content text-center p-relative z-index-1">
            <h3 class="breadcrumb__title">Berita</h3>
            <div class="breadcrumb__list">
              <span><a href="/">Home</a></span>
              <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
              <span><a href="/berita/all">Berita</a></span>
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

  <section class="blog__area pt-120 pb-120">
    <div class="container">
      <div class="row">

        <div class="col-xxl-8 col-xl-8 col-lg-8">
          <div class="postbox__wrapper pr-20">
            @foreach ($informasi as $item)
              <article class="postbox__item format-image mb-50 transition-3">
                <div class="postbox__thumb w-img">
                  <a href="/berita/{{ $item->token_berita }}/detail">
                    <img src="{{ asset('image/berita/' . $item->gambar_berita) }}" alt="">
                  </a>
                </div>
                <div class="postbox__content">
                  <div class="postbox__meta">
                    <span><i class="far fa-calendar-check"></i> {{ date('M, d Y', strtotime($item->created_at)) }} </span>
                    <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                    <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                  </div>
                  <h3 class="postbox__title">
                    <a href="/berita/{{ $item->token_berita }}/detail">{{ $item->nama_berita }}</a>
                  </h3>
                  <div class="postbox__text">
                    {!! substr($item->deskripsi_berita, 0, 450) !!} [...]
                  </div>
                  <div class="postbox__read-more">
                    <a href="/berita/{{ $item->token_berita }}/detail" class="tp-btn">read more</a>
                  </div>
                </div>
              </article>
            @endforeach
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4">
          <div class="blog__sidebar pl-70">
            <div class="sidebar__widget mb-55">
              <div class="sidebar__widget-head mb-35">
                <h3 class="sidebar__widget-title">Recent posts</h3>
              </div>
              <div class="sidebar__widget-content">
                <div class="rc__post-wrapper">
                  @foreach ($recent as $item)
                    <div class="rc__post d-flex align-items-start">
                      <div class="rc__thumb mr-20">
                        <a href="/berita/{{ $item->token_berita }}/detail"><img src="{{ asset('image/berita/' . $item->gambar_berita) }}"
                            alt=""></a>
                      </div>
                      <div class="rc__content">
                        <div class="rc__meta">
                          <span>{{ date('M, d Y', strtotime($item->created_at)) }}</span>
                        </div>
                        <h6 class="rc__title"><a href="/berita/{{ $item->token_berita }}/detail">{{ $item->nama_berita }}</a></h6>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="sidebar__widget mb-55">
              <div class="sidebar__widget-head mb-35">
                <h3 class="sidebar__widget-title">Kategori</h3>
              </div>
              <div class="sidebar__widget-content">
                <ul>
                  @foreach ($kategoris as $item)
                    <li><a href="/berita/{{ $item->id }}/all">{{ $item->nama_kategori }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="sidebar__widget mb-55">
              <div class="sidebar__widget-head mb-35">
                <h3 class="sidebar__widget-title">UKM</h3>
              </div>
              <div class="sidebar__widget-content">
                <div class="tagcloud">
                  @foreach ($ukms as $item)
                    <a href="#">{{ $item->nama_ukm }}</a>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="sidebar__widget mb-55">
              <div class="sidebar__banner w-img">
                <img src="assets/img/blog/banner/banner-1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
