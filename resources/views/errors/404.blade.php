@extends('layout.eduker')

@section('content')
     <!-- error area start -->
     <section class="error__area pt-120 pb-120">
        <div class="container">
           <div class="row justify-content-center">
              <div class="col-xxl-8">
                 <div class="error__content text-center">
                    <div class="error__thumb m-img mb-45">
                       <img src="{{ asset('eduker') }}/assets/img/error/error.png" alt="">
                    </div>
                    <div class="error__content">
                       <h3 class="error__title">Content Not Found</h3>
                       <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>

                       <div class="error__btn">
                          <a href="/" class="tp-btn">Back to home</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- error area end -->
@endsection