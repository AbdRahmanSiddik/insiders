@extends('layout.eduker')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay"
    data-background="{{ asset('eduker') }}/assets/img/breadcrumb/newbreadcrumb2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <div class="breadcrumb__content text-center p-relative z-index-1">
            <h3 class="breadcrumb__title">{{ $detail->nama_berita }}</h3>
            <div class="breadcrumb__list">
              <span><a href="/">Home</a></span>
              <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
              <span>Berita</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->

  <section class="blog__area pt-100 pb-120">
    <div class="container">
      <div class="row">

        <div class="col-xxl-8 col-xl-8 col-lg-8">
          <div class="postbox__wrapper postbox__details pr-20">
            <div class="postbox__item transition-3 mb-70">
              <div class="postbox__thumb m-img">
                <img src="{{ asset('image/berita/' . $detail->gambar_berita) }}" alt="">
              </div>
              <div class="postbox__content">
                <div class="postbox__meta">
                  <span><i class="far fa-calendar-check"></i> {{ date('M, d Y', strtotime($detail->created_at)) }} </span>
                  <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                  <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                </div>
                <h3 class="postbox__title">{{ $detail->nama_berita }}</h3>
                <div class="postbox__text">
                  <div id="short-description">
                    {{ Str::limit(strip_tags($detail->deskripsi_berita), 900, '...') }}
                  </div>
                  <div id="full-description" style="display: none;">
                    {!! $detail->deskripsi_berita !!}
                  </div>
                  <button id="read-more-btn" class="btn btn-primary mb-4 mt-4">View All</button>
                </div>
                <div class="postbox__line"></div>
                <div class="postbox__meta-3 d-sm-flex align-items-center">
                  <span>Kategori :</span>
                  <div class="tagcloud">
                    @foreach ($detail->kategoriBerita as $unit)
                      <a href="#">{{ $unit->nama_kategori }}</a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
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
                        <a href="/berita/{{ $item->token_berita }}/detail"><img
                            src="{{ asset('image/berita/' . $item->gambar_berita) }}" alt=""></a>
                      </div>
                      <div class="rc__content">
                        <div class="rc__meta">
                          <span>{{ date('M, d Y', strtotime($item->created_at)) }}</span>
                        </div>
                        <h6 class="rc__title"><a
                            href="/berita/{{ $item->token_berita }}/detail">{{ $item->nama_berita }}</a></h6>
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
                  @foreach ($kategori as $item)
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

  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const readMoreBtn = document.getElementById('read-more-btn');
      const shortDescription = document.getElementById('short-description');
      const fullDescription = document.getElementById('full-description');

      readMoreBtn.addEventListener('click', () => {
        if (fullDescription.style.display === 'none') {
          fullDescription.style.display = 'block';
          shortDescription.style.display = 'none';
          readMoreBtn.textContent = 'Read Less';
        } else {
          fullDescription.style.display = 'none';
          shortDescription.style.display = 'block';
          readMoreBtn.textContent = 'Read More';
        }
      });
    });
  </script>
@endsection
