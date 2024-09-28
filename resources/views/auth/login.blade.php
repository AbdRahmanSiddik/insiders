<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from wphix.com/html/eduker-html/eduker/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 06:28:22 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Insider – Admin Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('eduker') }}/assets/img/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/bootstrap.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/meanmenu.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/animate.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/owl-carousel.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/swiper-bundle.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/backtotop.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/magnific-popup.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/nice-select.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/font-awesome-pro.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/spacing.css">
  <link rel="stylesheet" href="{{ asset('eduker') }}/assets/css/style.css">
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


  <!-- pre loader area start -->
  <div id="loading">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <svg id="loader" width="200" height="200" viewBox="0 0 50 50">
          {{-- <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" /> --}}
          <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
        </svg>
        <img src="{{ asset('eduker') }}/assets/img/favicon.png" alt="" width="50px">
      </div>
    </div>
  </div>
  <!-- pre loader area end -->

  <!-- back to top start -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- back to top end -->

  <!-- header area start -->
  {{-- <header>
         <div class="header__area">
            <div class="header__top header__border d-none d-md-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8">
                        <div class="header__info">
                           <ul>
                              <li>
                                 <a href="https://wphix.com/cdn-cgi/l/email-protection#432a2d252c032627362826316d202c2e">
                                    <svg viewBox="0 0 15 13">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5163 7.93224C7.11179 7.93224 6.70849 7.79861 6.37109 7.53136L3.65922 5.34493C3.46391 5.18772 3.43368 4.90172 3.59029 4.70702C3.7481 4.51292 4.0335 4.48209 4.2282 4.63869L6.93765 6.8227C7.27807 7.09238 7.75756 7.09238 8.1004 6.82028L10.7826 4.6399C10.9773 4.48088 11.2627 4.51111 11.4212 4.70581C11.579 4.8999 11.5493 5.1853 11.3553 5.34372L8.66817 7.52773C8.32835 7.7974 7.92203 7.93224 7.5163 7.93224Z" fill="#4B535A"/>
                                    <path d="M7.5163 7.93224C7.11179 7.93224 6.70849 7.79861 6.37109 7.53136L3.65922 5.34493C3.46391 5.18772 3.43368 4.90172 3.59029 4.70702C3.7481 4.51292 4.0335 4.48209 4.2282 4.63869L6.93765 6.8227C7.27807 7.09238 7.75756 7.09238 8.1004 6.82028L10.7826 4.6399C10.9773 4.48088 11.2627 4.51111 11.4212 4.70581C11.579 4.8999 11.5493 5.1853 11.3553 5.34372L8.66817 7.52773C8.32835 7.7974 7.92203 7.93224 7.5163 7.93224" stroke="#4B535A" stroke-width="0.2"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53063 11.8838H10.4683C10.4695 11.8826 10.4744 11.8838 10.478 11.8838C11.1679 11.8838 11.7798 11.6371 12.249 11.1685C12.7938 10.6261 13.0931 9.8467 13.0931 8.97418V4.82142C13.0931 3.13262 11.989 1.90699 10.4683 1.90699H4.53184C3.01113 1.90699 1.90703 3.13262 1.90703 4.82142V8.97418C1.90703 9.8467 2.20694 10.6261 2.75113 11.1685C3.22034 11.6371 3.83286 11.8838 4.52216 11.8838H4.53063ZM4.52029 12.7908C3.58731 12.7908 2.7541 12.4521 2.11075 11.8112C1.39423 11.0965 1 10.0892 1 8.97418V4.82141C1 2.64284 2.51829 1 4.53178 1H10.4683C12.4818 1 14.0001 2.64284 14.0001 4.82141V8.97418C14.0001 10.0892 13.6058 11.0965 12.8893 11.8112C12.2466 12.4515 11.4127 12.7908 10.478 12.7908H10.4683H4.53178H4.52029Z" fill="#4B535A"/>
                                    <path d="M10.4683 11.8838V11.9838H10.5098L10.539 11.9545L10.4683 11.8838ZM12.249 11.1685L12.1785 11.0976L12.1784 11.0977L12.249 11.1685ZM2.75113 11.1685L2.8218 11.0977L2.82172 11.0976L2.75113 11.1685ZM2.11075 11.8112L2.04013 11.882L2.04017 11.8821L2.11075 11.8112ZM12.8893 11.8112L12.9599 11.8821L12.9599 11.882L12.8893 11.8112ZM4.53063 11.9838H10.4683V11.7838H4.53063V11.9838ZM10.539 11.9545C10.5246 11.969 10.5091 11.9755 10.4998 11.9786C10.4903 11.9816 10.4824 11.9826 10.4781 11.9829C10.4701 11.9836 10.464 11.983 10.464 11.983C10.4634 11.9829 10.463 11.9829 10.4634 11.9829C10.4635 11.9829 10.4646 11.9831 10.4656 11.9831C10.4673 11.9833 10.4721 11.9838 10.478 11.9838V11.7838C10.4802 11.7838 10.482 11.7839 10.483 11.7839C10.484 11.784 10.4846 11.7841 10.4847 11.7841C10.4868 11.7843 10.4818 11.7838 10.4806 11.7837C10.4787 11.7835 10.4709 11.7828 10.4615 11.7836C10.4566 11.784 10.4481 11.7851 10.4381 11.7883C10.4283 11.7915 10.4124 11.7983 10.3976 11.8131L10.539 11.9545ZM10.478 11.9838C11.1931 11.9838 11.8309 11.7274 12.3197 11.2392L12.1784 11.0977C11.7288 11.5467 11.1427 11.7838 10.478 11.7838V11.9838ZM12.3196 11.2393C12.8859 10.6756 13.1931 9.86931 13.1931 8.97418H12.9931C12.9931 9.82408 12.7018 10.5766 12.1785 11.0976L12.3196 11.2393ZM13.1931 8.97418V4.82142H12.9931V8.97418H13.1931ZM13.1931 4.82142C13.1931 3.08749 12.0538 1.80699 10.4683 1.80699V2.00699C11.9242 2.00699 12.9931 3.17775 12.9931 4.82142H13.1931ZM10.4683 1.80699H4.53184V2.00699H10.4683V1.80699ZM4.53184 1.80699C2.94632 1.80699 1.80703 3.08749 1.80703 4.82142H2.00703C2.00703 3.17775 3.07594 2.00699 4.53184 2.00699V1.80699ZM1.80703 4.82142V8.97418H2.00703V4.82142H1.80703ZM1.80703 8.97418C1.80703 9.86936 2.11492 10.6756 2.68054 11.2393L2.82172 11.0976C2.29896 10.5766 2.00703 9.82403 2.00703 8.97418H1.80703ZM2.68047 11.2392C3.16931 11.7274 3.80764 11.9838 4.52216 11.9838V11.7838C3.85808 11.7838 3.27137 11.5467 2.8218 11.0977L2.68047 11.2392ZM4.52216 11.9838H4.53063V11.7838H4.52216V11.9838ZM4.52029 12.6908C3.61295 12.6908 2.80536 12.3621 2.18133 11.7404L2.04017 11.8821C2.70284 12.5422 3.56168 12.8908 4.52029 12.8908V12.6908ZM2.18137 11.7404C1.48568 11.0465 1.1 10.0656 1.1 8.97418H0.9C0.9 10.1127 1.30279 11.1465 2.04013 11.882L2.18137 11.7404ZM1.1 8.97418V4.82141H0.9V8.97418H1.1ZM1.1 4.82141C1.1 2.69051 2.58079 1.1 4.53178 1.1V0.9C2.45578 0.9 0.9 2.59518 0.9 4.82141H1.1ZM4.53178 1.1H10.4683V0.9H4.53178V1.1ZM10.4683 1.1C12.4193 1.1 13.9001 2.69051 13.9001 4.82141H14.1001C14.1001 2.59518 12.5443 0.9 10.4683 0.9V1.1ZM13.9001 4.82141V8.97418H14.1001V4.82141H13.9001ZM13.9001 8.97418C13.9001 10.0656 13.5144 11.0465 12.8187 11.7404L12.9599 11.882C13.6973 11.1465 14.1001 10.1127 14.1001 8.97418H13.9001ZM12.8187 11.7404C12.1953 12.3614 11.3871 12.6908 10.478 12.6908V12.8908C11.4384 12.8908 12.2978 12.5416 12.9599 11.8821L12.8187 11.7404ZM10.478 12.6908H10.4683V12.8908H10.478V12.6908ZM10.4683 12.6908H4.53178V12.8908H10.4683V12.6908ZM4.53178 12.6908H4.52029V12.8908H4.53178V12.6908Z" fill="#4B535A"/>
                                    </svg> <span class="__cf_email__" data-cfemail="f990979f96b99c9d8c929c8bd79a9694">[email&#160;protected]</span></a>
                              </li>
                              <li>
                                 <a href="https://goo.gl/maps/qzqY2PAcQwUz1BYN9" target="_blank">
                                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M5.9235 4.66671C5.23068 4.66671 4.66709 5.2303 4.66709 5.92383C4.66709 6.61666 5.23068 7.17953 5.9235 7.17953C6.61632 7.17953 7.17991 6.61666 7.17991 5.92383C7.17991 5.2303 6.61632 4.66671 5.9235 4.66671ZM5.92354 8.25642C4.63698 8.25642 3.59021 7.21037 3.59021 5.9238C3.59021 4.63652 4.63698 3.58975 5.92354 3.58975C7.21011 3.58975 8.25688 4.63652 8.25688 5.9238C8.25688 7.21037 7.21011 8.25642 5.92354 8.25642Z" fill="#4B535A"/>
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92278 1.07695C3.25058 1.07695 1.07663 3.27172 1.07663 5.96834C1.07663 9.39942 5.11437 12.7422 5.92278 12.9202C6.73119 12.7415 10.7689 9.3987 10.7689 5.96834C10.7689 3.27172 8.59499 1.07695 5.92278 1.07695ZM5.92259 14C4.63459 14 -0.000488281 10.0139 -0.000488281 5.96831C-0.000488281 2.67723 2.65664 0 5.92259 0C9.18854 0 11.8457 2.67723 11.8457 5.96831C11.8457 10.0139 7.21059 14 5.92259 14Z" fill="#4B535A"/>
                                    </svg>
                                    Moon ave, New York, 2020 NY US</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-4 col-lg-4 col-md-4">
                        <div class="header__top-right d-flex justify-content-end align-items-center">
                           <div class="header__login">
                              <a href="sign-in.html"><svg viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M5.99995 6.83333C7.61078 6.83333 8.91662 5.5275 8.91662 3.91667C8.91662 2.30584 7.61078 1 5.99995 1C4.38912 1 3.08328 2.30584 3.08328 3.91667C3.08328 5.5275 4.38912 6.83333 5.99995 6.83333Z" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M11.0108 12.6667C11.0108 10.4092 8.76497 8.58333 5.99997 8.58333C3.23497 8.58333 0.989136 10.4092 0.989136 12.6667" stroke="#031220" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg> Login</a>
                           </div>
                           <div class="header__btn ml-20">
                              <a href="contact.html" class="header-btn">contact us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header__bottom" id="header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="logo">
                           <a href="index.html">
                              <img src="{{ asset('eduker') }}/assets/img/logo/logo.png" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="index.html">Home</a>
                                    <ul class="submenu">
                                       <li><a href="index.html">Home Style 1</a></li>
                                       <li><a href="index-2.html">Home Style 2</a></li>
                                       <li><a href="index-3.html">Home Style 3</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="about.html">About</a>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="course-v1.html">Courses</a>
                                    <ul class="submenu">
                                       <li><a href="course-v1.html">Course Style 1</a></li>
                                       <li><a href="course-v2.html">Course Style 2</a></li>
                                       <li><a href="course-list.html">Course List</a></li>
                                       <li><a href="course-sidebar.html">Course Sidebar</a></li>
                                       <li><a href="course-details.html">Course Details</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="about.html">Pages</a>
                                    <ul class="submenu">
                                       <li><a href="event.html">Our Events</a></li>
                                       <li><a href="event-details.html">Event Details</a></li>
                                       <li><a href="team.html">Team</a></li>
                                       <li><a href="team-details.html">Team Details</a></li>
                                       <li><a href="error.html">404 Error</a></li>
                                       <li><a href="my-profile.html">My Profile</a></li>
                                       <li><a href="my-course.html">My Courses</a></li>
                                       <li><a href="sign-in.html">Sign In</a></li>
                                       <li><a href="sign-up.html">Sign Up</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="wishlist.html">Wishlist</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                       <li><a href="blog.html">Blog</a></li>
                                       <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="contact.html">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                        <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                           <div class="header__search w-100 d-none d-xl-block">
                              <form action="#">
                                 <div class="header__search-input">
                                    <input type="text" placeholder="Search...">
                                    <button class="header__search-btn"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M8.11117 15.2222C12.0385 15.2222 15.2223 12.0385 15.2223 8.11111C15.2223 4.18375 12.0385 1 8.11117 1C4.18381 1 1.00006 4.18375 1.00006 8.11111C1.00006 12.0385 4.18381 15.2222 8.11117 15.2222Z" stroke="#031220" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M17 17L13.1334 13.1333" stroke="#031220" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </button>
                                 </div>
                              </form>
                           </div>
                           <div class="header__hamburger ml-50 d-xl-none">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal" class="hamurger-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header> --}}
  <!-- header area end -->

  <!-- offcanvas area start -->
  <div class="offcanvas__area">
    <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
              <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                  <a href="index.html">
                    <img src="{{ asset('eduker') }}/assets/img/logo/logo.png" alt="logo">
                  </a>
                </div>
                <div class="offcanvas__close">
                  <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                    <i class="fal fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="offcanvas__search mb-25">
                <form action="#">
                  <input type="text" placeholder="What are you searching for?">
                  <button type="submit"><i class="far fa-search"></i></button>
                </form>
              </div>
              <div class="mobile-menu fix"></div>
              <div class="offcanvas__text d-none d-lg-block">
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                  born and will give you a complete account of the system and expound the actual teachings of the great
                  explore</p>
              </div>
              <div class="offcanvas__map d-none d-lg-block mb-15">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
              </div>
              <div class="offcanvas__contact mt-30 mb-20">
                <h4>Contact Info</h4>
                <ul>
                  <li class="d-flex align-items-center">
                    <div class="offcanvas__contact-icon mr-15">
                      <i class="fal fa-map-marker-alt"></i>
                    </div>
                    <div class="offcanvas__contact-text">
                      <a target="_blank"
                        href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                        Mirnada City Tower, NYC</a>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="offcanvas__contact-icon mr-15">
                      <i class="far fa-phone"></i>
                    </div>
                    <div class="offcanvas__contact-text">
                      <a
                        href="https://wphix.com/cdn-cgi/l/email-protection#4a393f3a3a25383e0a2d272b232664292527">088889797697</a>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="offcanvas__contact-icon mr-15">
                      <i class="fal fa-envelope"></i>
                    </div>
                    <div class="offcanvas__contact-text">
                      <a href="tel:+012-345-6789"><span class="__cf_email__"
                          data-cfemail="43303633332c3137032e222a2f6d202c2e">[email&#160;protected]</span></a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="offcanvas__social">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas area end -->
  <div class="body-overlay"></div>
  <!-- offcanvas area end -->

  <main>

    <!-- breadcrumb area start -->
    {{-- <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="{{ asset('eduker') }}/assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Login</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.html">Home</a></span>
                           <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                           <span>Login</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> --}}
    <!-- breadcrumb area end -->

    <!-- sign up area start -->
    <section class="signup__area p-relative z-index-1 pt-10 pb-145">
      <div class="sign__shape">
        <img class="man-1" src="{{ asset('eduker') }}/assets/img/icon/sign/man-1.png" alt="">
        <img class="man-2" src="{{ asset('eduker') }}/assets/img/icon/sign/man-2.png" alt="">
        <img class="circle" src="{{ asset('eduker') }}/assets/img/icon/sign/circle.png" alt="">
        <img class="zigzag" src="{{ asset('eduker') }}/assets/img/icon/sign/zigzag.png" alt="">
        <img class="dot" src="{{ asset('eduker') }}/assets/img/icon/sign/dot.png" alt="">
        <img class="bg" src="{{ asset('eduker') }}/assets/img/icon/sign/sign-up.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
            <div class="section__title-wrapper text-center mb-55">
              <h2 class="section__title">Sign in to Admin.</h2>
              <p>it you don't have an account you can <a href="#">Register here!</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="sign__wrapper white-bg">
              <div class="sign__header mb-0">
                <div class="sign__in text-center">
                  <a href="#" class="sign__social text-start mb-15"><i class="bi bi-person"></i>Admin Login Page</a>
                  <p> <span>........</span> Or, <a href="sign-in.html">sign in</a> with your email<span>
                      ........</span> </p>
                </div>
              </div>
              <div class="sign__form mt-0">
                <form action="/login" method="POST">
                  @csrf
                  <div class="sign__input-wrapper mb-25">
                    <h5>Work email</h5>
                    <div class="sign__input">
                      <input type="text" placeholder="e-mail address" name="email">
                      <i class="fal fa-envelope"></i>
                    </div>
                  </div>
                  <div class="sign__input-wrapper mb-10">
                    <h5>Password</h5>
                    <div class="sign__input">
                      <input type="password" placeholder="Password" name="password">
                      <i class="fal fa-lock"></i>
                    </div>
                  </div>
                  <div class="sign__action d-sm-flex justify-content-between mb-30">
                    <div class="sign__agree d-flex align-items-center">
                      <input class="m-check-input" type="checkbox" id="m-agree">
                      <label class="m-check-label" for="m-agree">Keep me signed in
                      </label>
                    </div>
                    <div class="sign__forgot">
                      <a href="#">Forgot your password?</a>
                    </div>
                  </div>
                  <button type="submit" class="tp-btn  w-100"> <span></span> Sign In</button>
                  <div class="sign__new text-center mt-20">
                    <p>New to Eduker? <a href="/">Sign Up</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- sign up area end -->


  </main>

  <!-- footer area start -->
  {{-- <footer>
            <div class="footer__area">
               <div class="footer__top grey-bg-4 pt-95 pb-45">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                           <div class="footer__widget footer-col-1 mb-50">
                              <div class="footer__logo">
                                 <div class="logo">
                                    <a href="index.html">
                                       <img src="{{ asset('eduker') }}/assets/img/logo/logo.png" alt="">
                                    </a>
                                 </div>
                              </div>
                              <div class="footer__widget-content">
                                 <div class="footer__widget-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus, nulla utlaoki comm odo sagittis.</p>
                                    <div class="footer__social">
                                       <h4>Follow Us</h4>

                                       <ul>
                                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                           <div class="footer__widget mb-50">
                              <h3 class="footer__widget-title">Explore</h3>
                              <div class="footer__widget-content">
                                 <ul>
                                    <li>
                                       <a href="#">About us</a>
                                    </li>
                                    <li>
                                       <a href="#">Success story</a>
                                    </li>
                                    <li>
                                       <a href="#">Courses</a>
                                    </li>
                                    <li>
                                       <a href="#">About us</a>
                                    </li>
                                    <li>
                                       <a href="#">Instructor</a>
                                    </li>
                                    <li>
                                       <a href="#">Events</a>
                                    </li>
                                    <li>
                                       <a href="#">Contact us</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                           <div class="footer__widget mb-50">
                              <h3 class="footer__widget-title">Links</h3>
                              <div class="footer__widget-content">
                                 <ul>
                                    <li>
                                       <a href="#">News & Blogs</a>
                                    </li>
                                    <li>
                                       <a href="#">Library</a>
                                    </li>
                                    <li>
                                       <a href="#">Gallery</a>
                                    </li>
                                    <li>
                                       <a href="#">Terms of service</a>
                                    </li>
                                    <li>
                                       <a href="#">Membership</a>
                                    </li>
                                    <li>
                                       <a href="#">Career</a>
                                    </li>
                                    <li>
                                       <a href="#">Partners</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                           <div class="footer__widget footer-col-4 mb-50">
                              <h3 class="footer__widget-title">Sign up for our newsletter</h3>

                              <div class="footer__subscribe">
                                 <p>Receive weekly newsletter with educational materials, popular books and much more!</p>
                                 <form action="#">
                                    <div class="footer__subscribe-input">
                                       <input type="text" placeholder="Email">
                                       <button type="submit" class="tp-btn-subscribe">Subscribe</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__bottom grey-bg-4">
                  <div class="container">
                     <div class="footer__bottom-inner">
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="footer__copyright text-center">
                                 <p>© 2022 Eduker. All Rights Reserved</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer> --}}
  <!-- footer area end -->

  <!-- JS here -->
  <script data-cfasync="false"
    src="{{ asset('eduker') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/vendor/jquery.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/vendor/waypoints.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/bootstrap-bundle.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/meanmenu.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/swiper-bundle.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/owl-carousel.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/magnific-popup.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/parallax.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/backtotop.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/nice-select.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/counterup.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/wow.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/isotope-pkgd.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/imagesloaded-pkgd.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/ajax-form.js"></script>
  <script src="{{ asset('eduker') }}/assets/js/main.js"></script>
</body>

<!-- Mirrored from wphix.com/html/eduker-html/eduker/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2024 06:28:23 GMT -->

</html>
