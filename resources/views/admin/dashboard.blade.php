@extends('layout.kleon')

@section('content')
  <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
    <div class="left-part">
      <h2 class="text-dark">Admin Dashboard</h2>
      <p class="text-gray mb-0">Informasi Data aktual </p>
    </div>
    <div class="right-part">
      {{-- <a href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf"
        class="btn btn-primary rounded-2 ff-heading fs-18 fw-bold py-4" download><i class="bi bi-pie-chart-fill me-1"></i>
        Download Report</a> --}}
    </div>
  </div>

  <div class="row">
    <div class="col-xxl-6 col-lg-12">
      <div class="row">
        {{-- <div class="col col-12">
          <div class="card border-0 shadow-sm py-3">
            <div class="card-body py-0">
              <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                <div class="d-flex align-items-center gap-0 flex-wrap">
                  <div id="chart-45"></div>
                  <div>
                    <h4 class="mb-3">Total Balance</h4>
                    <h2 class="fs-38 mb-0">$21,560.57</h2>
                  </div>
                </div>

                <div>
                  <h5 class="fw-semibold mb-1">Average from last month</h5>
                  <p class="text-gray mb-0"><span class="text-success fw-bold"><i class="bi bi-graph-up-arrow"></i>
                      +0.5%</span> invoices sent</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah UKM Aktif</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $ukm_aktif }} <div class="badge bg-success fs-16"><i
                    class="bi bi-graph-up-arrow me-2"></i> Aktif</div>
              </h2>
            </div>
          </div>
        </div>

        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah UKM Non Aktif</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $ukm_non_aktif }} <div class="badge bg-danger fs-16"><i
                    class="bi bi-graph-down-arrow me-2"></i> Non Aktif</div>
              </h2>
            </div>
          </div>
        </div>
        
        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah Berita Posted</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $berita_posted }} <div class="badge bg-success fs-16"><i
                    class="bi bi-graph-up-arrow me-2"></i> Posted</div>
              </h2>
            </div>
          </div>
        </div>

        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah Berita Unposted</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $berita_non_posted }} <div class="badge bg-danger fs-16"><i
                    class="bi bi-graph-down-arrow me-2"></i> Unposted</div>
              </h2>
            </div>
          </div>
        </div>
        
        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah Kategori UKM</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $kategori_ukm_jumlah }} <div class="badge bg-warning fs-16"><i
                    class="bi bi-graph-down-arrow me-2"></i> UKM</div>
              </h2>
            </div>
          </div>
        </div>
        
        <div class="col col-lg-6">
          <div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
            <div class="card-body py-0">
              <h4 class="mb-3">Jumlah Berita Unposted</h4>
              <h2 class="fs-38 d-flex align-items-center gap-4"> {{ $kategori_berita_jumlah }} <div class="badge bg-warning fs-16"><i
                    class="bi bi-graph-down-arrow me-2"></i> Berita</div>
              </h2>
            </div>
          </div>
        </div>

        {{-- <div class="col col-12">
          <div class="card pie-card border-0 shadow-sm">
            <div
              class="card-header bg-transparent border-0 p-5 pb-0 d-flex align-items-center justify-content-between gap-3 flex-wrap">
              <h4 class="mb-0">Pie Chart</h4>
              <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center gap-3">
                  <div class="form-check form-check-inline m-0">
                    <label class="form-label mb-0 ff-heading fs-18 fw-semibold" for="checkbox1">Chart</label>
                    <input type="checkbox" class="form-check-input" id="checkbox1" value="">
                  </div>
                  <div class="form-check form-check-inline m-0">
                    <label class="form-label mb-0 ff-heading fs-18 fw-semibold" for="checkbox2">Value</label>
                    <input type="checkbox" class="form-check-input" id="checkbox2" value="" checked>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body pt-0">
              <div class="d-flex align-items-center justify-content-around justify-content-xxl-between gap-3 flex-wrap">
                <div>
                  <div id="chart-48"></div>
                  <h5 class="fw-semibold text-center mb-0 negative-margin">Invoices Made</h5>
                </div>
                <div>
                  <div id="chart-49"></div>
                  <h5 class="fw-semibold text-center mb-0 negative-margin">Clients Growth</h5>
                </div>
                <div>
                  <div id="chart-50"></div>
                  <h5 class="fw-semibold text-center mb-0 negative-margin">Projects Done</h5>
                </div>
              </div>

              <div class="card-footer d-flex align-items-center justify-content-between gap-4 flex-wrap p-0 pt-5 mt-6">
                <div>
                  <h5 class="fs-20">Best tips increase management</h5>
                  <p class="fs-14 text-gray mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna</p>
                </div>

                <div class="btn-group flex-shrink-0">
                  <a href="inbox.html"
                    class="btn bg-soft-success btn-outline-success rounded-2 ff-heading fs-18 fw-bold lh-24 py-3">
                    Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-12">
          <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-0 p-5 pb-2">
              <div>
                <h4>Projects Calendar</h4>
                <p class="text-gray mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="flatpickr-inline"></div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>

    {{-- <div class="col-xxl-6 col-lg-12">
      <div class="card border-0 shadow-sm">
        <div
          class="card-header bg-transparent border-0 p-5 pb-0 d-flex align-items-center justify-content-between gap-3 flex-wrap">
          <h4 class="mb-0">Invoices Statistic</h4>
          <div class="d-flex align-items-center gap-3">
            <select class="kleon-select-simple nav-toggler-content">
              <option value="0">Daily</option>
              <option value="1">Weekly</option>
              <option selected value="2">Monthly</option>
              <option value="3">Yearly</option>
            </select>

            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                <i class="bi bi-three-dots-vertical"></i>
              </a>
              <div class="dropdown-menu p-0">
                <a class="dropdown-item" href="#">Download SVG</a>
                <a class="dropdown-item" href="#">Download PDF</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body pt-2">
          <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
            <div>
              <div class="d-flex align-items-baseline gap-3 gap-xxl-7 mb-3">
                <p class="mb-0"><span class="indicator bg-success"></span> Total Paid</p>
                <h4 class="fs-20 mb-0">1,567</h4>
              </div>
              <div class="d-flex align-items-baseline gap-3 gap-xxl-7">
                <p class="mb-0"><span class="indicator bg-info"></span> Total Unpaid</p>
                <h4 class="fs-20 mb-0">569</h4>
              </div>
            </div>

            <div class="d-flex align-items-center gap-4 justify-content-center flex-wrap">
              <div class="form-switch">
                <input type="checkbox" class="form-check-input border-0" id="number" checked>
                <label class="form-label mb-0 fs-18 fw-semibold lh-32" for="number">Number</label>
              </div>
              <div class="form-switch">
                <input type="checkbox" class="form-check-input border-0" id="analytics">
                <label class="form-label mb-0 fs-18 fw-semibold lh-32" for="analytics">Analytics</label>
              </div>
            </div>
          </div>

          <div id="chart-44"></div>
        </div>
      </div>

      <div class="card border-0 shadow-sm">
        <div class="card-header bg-transparent border-0 p-5 pb-0">
          <h4 class="mb-0">Latest Invoice Payment</h4>
        </div>

        <div class="card-body pt-2">
          <div class="table-responsive">
            <table id="table-6" class="display text-center">
              <thead>
                <tr>
                  <th>Invoice No</th>
                  <th>Amount</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex gap-2 flex-wrap">
                      <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                        <img src="{{ asset('kleon') }}/assets/img/clients/1.jpg" alt="img">
                      </div>
                      <div>
                        <a href="invoice.html" class="fs-14 fw-semibold">#INV-0001234</a>
                        <h6 class="fw-semibold mb-0">Jean Graphic Inc.</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex gap-2">
                      <i class="bi bi-bookmark-check-fill text-gray"></i>
                      <div>
                        <p class="fs-14 fw-semibold text-dark mb-0">Amount</p>
                        <h5 class="fs-20 mb-0">$ 650,036.34</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fs-14 text-gray mb-0">2m ago</p>
                  </td>
                  <td>
                    <div class="dropdown text-end">
                      <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="invoice.html"><i class="bi bi-eye"></i></a>
                        <a class="dropdown-item" href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf" download><i
                            class="bi bi-download"></i></a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="d-flex gap-2 flex-wrap">
                      <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                        <img src="{{ asset('kleon') }}/assets/img/clients/2.jpg" alt="img">
                      </div>
                      <div>
                        <a href="invoice.html" class="fs-14 fw-semibold">#INV-0001235</a>
                        <h6 class="fw-semibold mb-0">Higspeed Studios</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex gap-2">
                      <i class="bi bi-bookmark-check-fill text-gray"></i>
                      <div>
                        <p class="fs-14 fw-semibold text-dark mb-0">Amount</p>
                        <h5 class="fs-20 mb-0">$ 178.34</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fs-14 text-gray mb-0">12m ago</p>
                  </td>
                  <td>
                    <div class="dropdown text-end">
                      <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="invoice.html"><i class="bi bi-eye"></i></a>
                        <a class="dropdown-item" href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf" download><i
                            class="bi bi-download"></i></a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="d-flex gap-2 flex-wrap">
                      <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                        <img src="{{ asset('kleon') }}/assets/img/clients/3.jpg" alt="img">
                      </div>
                      <div>
                        <a href="invoice.html" class="fs-14 fw-semibold">#INV-0001236</a>
                        <h6 class="fw-semibold mb-0">Fullspeedo Crew</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex gap-2">
                      <i class="bi bi-bookmark-check-fill text-gray"></i>
                      <div>
                        <p class="fs-14 fw-semibold text-dark mb-0">Amount</p>
                        <h5 class="fs-20 mb-0">$ 326.34</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fs-14 text-gray mb-0">6h ago</p>
                  </td>
                  <td>
                    <div class="dropdown text-end">
                      <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="invoice.html"><i class="bi bi-eye"></i></a>
                        <a class="dropdown-item" href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf" download><i
                            class="bi bi-download"></i></a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="d-flex gap-2 flex-wrap">
                      <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                        <img src="{{ asset('kleon') }}/assets/img/clients/4.jpg" alt="img">
                      </div>
                      <div>
                        <a href="invoice.html" class="fs-14 fw-semibold">#INV-0001237</a>
                        <h6 class="fw-semibold mb-0">Wedeloper Team</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex gap-2">
                      <i class="bi bi-bookmark-check-fill text-gray"></i>
                      <div>
                        <p class="fs-14 fw-semibold text-dark mb-0">Amount</p>
                        <h5 class="fs-20 mb-0">$ 50,036.34</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fs-14 text-gray mb-0">18h ago</p>
                  </td>
                  <td>
                    <div class="dropdown text-end">
                      <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="invoice.html"><i class="bi bi-eye"></i></a>
                        <a class="dropdown-item" href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf" download><i
                            class="bi bi-download"></i></a>
                      </div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <div class="d-flex gap-2 flex-wrap">
                      <div class="profilepicture flex-shrink-0 d-none d-xl-block">
                        <img src="{{ asset('kleon') }}/assets/img/clients/5.jpg" alt="img">
                      </div>
                      <div>
                        <a href="invoice.html" class="fs-14 fw-semibold">#INV-0001238</a>
                        <h6 class="fw-semibold mb-0">Humbly Humble</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex gap-2">
                      <i class="bi bi-bookmark-check-fill text-gray"></i>
                      <div>
                        <p class="fs-14 fw-semibold text-dark mb-0">Amount</p>
                        <h5 class="fs-20 mb-0">$ 23,936.34</h5>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="fs-14 text-gray mb-0">Yesterday, 07:03 AM</p>
                  </td>
                  <td>
                    <div class="dropdown text-end">
                      <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu p-0">
                        <a class="dropdown-item" href="invoice.html"><i class="bi bi-eye"></i></a>
                        <a class="dropdown-item" href="{{ asset('kleon') }}/assets/img/kleon-invoice.pdf" download><i
                            class="bi bi-download"></i></a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card border-0 shadow-sm">
        <div
          class="card-header bg-transparent border-0 p-5 pb-0 d-flex align-items-center justify-content-between gap-3 flex-wrap">
          <h4 class="mb-0">Completion Project Rate</h4>
          <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown" class="fs-24 text-gray">
                <i class="bi bi-three-dots-vertical"></i>
              </a>
              <div class="dropdown-menu p-0">
                <a class="dropdown-item" href="#">Download SVG</a>
                <a class="dropdown-item" href="#">Download PDF</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body d-flex align-items-center gap-3 flex-wrap">
          <div id="chart-43" class="flex-grow-1"></div>
          <div class="flex-shrink-0">
            <h2 class="d-flex align-items-center gap-2 mb-2"> 49 <i
                class="bi bi-arrow-up-circle-fill fs-26 text-success ms-1"></i></h2>
            <h5 class="fw-semibold lh-24 mb-0">Total Task Closed</h5>
            <h5 class="fw-semibold text-gray mb-0"><span class="text-success fw-bold">+5.4%</span> than last
              day</h5>
          </div>
        </div>
      </div>

        <!-- <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-0 p-5 pb-0 d-flex align-items-center justify-content-between gap-3 flex-wrap">
                <h4 class="mb-0">Other Chart</h4>
            </div>
            <div class="card-body pt-2">
                <div id="chart-47"></div>
            </div>
        </div> -->
    </div> --}}
  </div>
@endsection
