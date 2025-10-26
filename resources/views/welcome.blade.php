<!doctype html>

<html
  lang="en"
  class="layout-navbar-fixed layout-wide"
  dir="ltr"
  data-skin="default"
  data-assets-path="{{ asset('assets/') }}"
  data-template="front-pages"
  data-bs-theme="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Unibord</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/iconify-icons.css') }}" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}" />

    <!-- Vendors CSS -->

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('assets/js/front-config.js') }}"></script>
    @auth
        <meta http-equiv="refresh" content="0;url={{ route('dashboard') }}">
    @endauth
  </head>

  <body>
    <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
      <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
          <!-- Menu logo wrapper: Start -->
          <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8 ms-0">
            <!-- Mobile menu toggle: Start-->
            <button
              class="navbar-toggler border-0 px-0 me-4"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-menu-2 icon-lg align-middle text-heading fw-medium"></i>
            </button>
            <!-- Mobile menu toggle: End-->
            <a href="{{ route('home') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                  <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                      fill="currentColor" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                      fill="#161616" />
                    <path
                      opacity="0.06"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                      fill="#161616" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                      fill="currentColor" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">Campus UniBoard</span>
            </a>
          </div>
          <!-- Menu logo wrapper: End -->
          <!-- Menu wrapper: Start -->
          <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
            <button
              class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="icon-base ti tabler-x icon-lg"></i>
            </button>
            <ul class="navbar-nav me-auto">
              
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingFeatures">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingNotice">Notice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingLost&Found">Lost&Found</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="#landingAbout">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-medium" href="{{ route('dashboard') }}" target="_blank">Admin</a>
              </li>
            </ul>
          </div>
          <div class="landing-menu-overlay d-lg-none"></div>
          <!-- Menu wrapper: End -->
          <!-- Toolbar: Start -->
          <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Style Switcher -->
            <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
              <a
                class="nav-link dropdown-toggle hide-arrow"
                id="nav-theme"
                href="javascript:void(0);"
                data-bs-toggle="dropdown">
                <i class="icon-base ti tabler-sun icon-lg theme-icon-active"></i>
                <span class="d-none ms-2" id="nav-theme-text">Toggle theme</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="nav-theme-text">
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center active"
                    data-bs-theme-value="light"
                    aria-pressed="true">
                    <span><i class="icon-base ti tabler-sun icon-md me-3" data-icon="sun"></i>Light</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="dark"
                    aria-pressed="false">
                    <span><i class="icon-base ti tabler-moon-stars icon-md me-3" data-icon="moon-stars"></i>Dark</span>
                  </button>
                </li>
                <li>
                  <button
                    type="button"
                    class="dropdown-item align-items-center"
                    data-bs-theme-value="system"
                    aria-pressed="false">
                    <span><i class="icon-base ti tabler-device-desktop-analytics icon-md me-3" data-icon="device-desktop-analytics"></i>System</span>
                  </button>
                </li>
              </ul>
            </li>
            <!-- / Style Switcher-->

            <!-- navbar button: Start -->
            <li>
              @auth
                <span class="text-heading me-3">Welcome, {{ auth()->user()->name }}</span>
                <a href="{{ route('logout') }}" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <span class="tf-icons icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span>
                  <span class="d-none d-md-block">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              @else
                <a href="{{ route('login') }}" class="btn btn-primary" target="_blank">
                  <span class="tf-icons icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span>
                  <span class="d-none d-md-block">Login</span>
                </a>
                <a href="{{ route('register') }}" class="btn btn-primary ms-2" target="_blank">
                  <span class="tf-icons icon-base ti tabler-login scaleX-n1-rtl me-md-1"></span>
                  <span class="d-none d-md-block">Register</span>
                </a>
              @endauth
            </li>
            <!-- navbar button: End -->
          </ul>
          <!-- Toolbar: End -->
        </div>
      </div>
    </nav>
    <!-- Navbar: End -->

    <!-- Sections:Start -->

    <div data-bs-spy="scroll" class="scrollspy-example">
      <!-- Hero: Start -->
      <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
          <img
            src="{{ asset('assets/img/front-pages/backgrounds/hero-bg.png') }}"
            alt="hero background"
            class="position-absolute top-0 start-50 translate-middle-x object-fit-cover w-100 h-100"
            data-speed="1" />
          <div class="container">
            <div class="hero-text-box text-center position-relative">
              <h1 class="text-primary hero-title display-6 fw-extrabold">
                Welcome to UniBoard:
                Your Smart Campus Notice Board and Lost & Found System
              </h1>
              <h2 class="hero-sub-title h6 mb-6">
                Stay updated with campus notices, find lost items, and connect with your university community.
              </h2>
              <div class="landing-hero-btn d-inline-block position-relative"> 
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Sign up</a>
              </div>
            </div>
            <div id="heroDashboardAnimation" class="hero-animation-img">
              <a href="{{ route('dashboard') }}" target="_blank">
                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                  <img
                    src="{{ asset('assets/img/front-pages/landing-page/hero-dashboard-light.png') }}"
                    alt="hero dashboard"
                    class="animation-img"
                    data-app-light-img="front-pages/landing-page/hero-dashboard-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                  <img
                    src="{{ asset('assets/img/front-pages/landing-page/hero-elements-light.png') }}"
                    alt="hero elements"
                    class="position-absolute hero-elements-img animation-img top-0 start-0"
                    data-app-light-img="front-pages/landing-page/hero-elements-light.png"
                    data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="landing-hero-blank"></div>
      </section>
      <!-- Hero: End -->

      <!-- Useful features: Start -->
      <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Useful Features</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1"
              >What UniBoard Offers
              <img
                src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
           
          </h4>
          <div class="features-icon-wrapper row gx-0 gy-6 g-sm-12">
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="mb-4 text-primary text-center">
                <svg width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    opacity="0.2"
                    d="M10 44.4663V18.4663C10 17.4054 10.4214 16.388 11.1716 15.6379C11.9217 14.8877 12.9391 14.4663 14 14.4663H50C51.0609 14.4663 52.0783 14.8877 52.8284 15.6379C53.5786 16.388 54 17.4054 54 18.4663V44.4663H10Z"
                    fill="currentColor" />
                  <path
                    d="M10 44.4663V18.4663C10 17.4054 10.4214 16.388 11.1716 15.6379C11.9217 14.8877 12.9391 14.4663 14 14.4663H50C51.0609 14.4663 52.0783 14.8877 52.8284 15.6379C53.5786 16.388 54 17.4054 54 18.4663V44.4663M36 22.4663H28M6 44.4663H58V48.4663C58 49.5272 57.5786 50.5446 56.8284 51.2947C56.0783 52.0449 55.0609 52.4663 54 52.4663H10C8.93913 52.4663 7.92172 52.0449 7.17157 51.2947C6.42143 50.5446 6 49.5272 6 48.4663V44.4663Z"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <h5 class="mb-2"><b>Smart Notice Board</b></h5>
              <p class="features-icon-description">
                Get instant updates about campus events, announcements, and news. Stay connected and informed every day.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="mb-4 text-primary text-center">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    opacity="0.2"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M52.8934 36.9867L45.1661 27.709C45.4614 33.3937 44.0587 40.0137 39.7274 47.5687L47.1102 53.475C47.3728 53.6835 47.6842 53.8215 48.0149 53.8759C48.3457 53.9303 48.6849 53.8994 49.0004 53.786C49.3159 53.6726 49.5972 53.4806 49.8177 53.228C50.0381 52.9755 50.1905 52.6709 50.2602 52.343L53.2872 38.6602C53.3602 38.3701 53.3625 38.0667 53.294 37.7755C53.2255 37.4843 53.0881 37.2138 52.8934 36.9867ZM10.959 37.1344L18.6864 27.8813C18.3911 33.566 19.7938 40.1859 24.1251 47.7164L16.7422 53.6227C16.4814 53.8311 16.1718 53.9698 15.8426 54.0256C15.5134 54.0814 15.1754 54.0526 15.8604 53.9419C15.5453 53.8311 15.2637 53.6421 15.0418 53.3925C14.82 53.143 14.6653 52.8411 14.5922 52.5152L10.5653 38.8078C10.4923 38.5177 10.49 38.2144 10.5585 37.9232C10.627 37.632 10.7644 37.3615 10.959 37.1344Z"
                    fill="currentColor" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.1373 4.56417C30.661 4.13034 31.3197 3.89282 31.9999 3.89282C32.6817 3.89282 33.3419 4.1314 33.8661 4.56708C36.2461 6.5048 41.3981 11.3124 44.2413 18.7028C45.231 21.2754 45.9359 24.1485 46.1526 27.3062L53.8054 36.4894C54.1015 36.8368 54.3105 37.2498 54.4151 37.6941C54.519 38.1357 54.5167 38.5956 54.4085 39.0361L51.3844 52.7309C51.2735 53.2253 51.0402 53.6805 50.7057 54.0569C50.3712 54.4332 49.9465 54.7183 49.4715 54.8853C48.9964 55.0523 48.4867 55.0957 47.9903 55.0115C47.4939 54.9273 47.027 54.7182 46.6337 54.4039L46.6332 54.4035L39.5243 48.7164H24.4758L17.3669 54.4035L17.3665 54.4039C16.9731 54.7182 16.5062 54.9273 16.0098 55.0115C15.5134 55.0957 15.0037 55.0523 14.5287 54.8853C14.0537 54.7183 13.6289 54.4332 13.2944 54.0569C12.9599 53.6805 12.7266 53.2253 12.6165 52.734L12.6158 52.7309L9.59162 39.0361C9.48345 38.5957 9.48117 38.1358 9.58509 37.6941C9.68969 37.2496 9.89886 36.8364 10.1952 36.489L17.7037 27.4979C17.9004 24.2604 18.619 21.3188 19.6398 18.6906C22.5111 11.2981 27.7301 6.49122 30.1373 4.56417ZM52.2729 37.7746L46.2018 30.4892C46.0153 35.5301 44.567 41.2065 41.1592 47.4631L47.8821 52.8414C48.0105 52.944 48.1628 53.0122 48.3248 53.0397C48.4868 53.0672 48.6531 53.053 48.8081 52.9985C48.9631 52.944 49.1017 52.851 49.2109 52.7282C49.3197 52.6057 49.3957 52.4576 49.4318 52.2978L49.4321 52.2965L52.4584 38.5922C52.4605 38.5827 52.4627 38.5733 52.4651 38.5639C52.499 38.4289 52.5001 38.2877 52.4682 38.1522C52.4363 38.0167 52.3724 37.8908 52.2818 37.7852L52.2728 37.7746L52.2729 37.7746ZM17.6801 30.6463L11.7266 37.7754L11.7184 37.7852L11.7183 37.7852C11.6277 37.8908 11.5638 38.0167 11.5319 38.1522C11.5 38.2877 11.5011 38.4289 11.5351 38.5639C11.5374 38.5733 11.5397 38.5827 11.5418 38.5922L14.568 52.2965L14.5683 52.2978C14.6044 52.4576 14.6804 52.6057 14.7893 52.7282C14.8984 52.851 15.037 52.944 15.192 52.9985C15.347 53.053 15.5133 53.0672 15.6753 53.0397C15.8373 53.0122 15.9897 52.944 16.118 52.8414L22.835 47.4678C19.3947 41.2766 17.9053 35.6511 17.6801 30.6463ZM27.0626 55.5914C27.0626 55.0391 27.5103 54.5914 28.0626 54.5914H35.9376C36.4899 54.5914 36.9376 55.0391 36.9376 55.5914C36.9376 56.1437 36.4899 56.5914 35.9376 56.5914H28.0626C27.5103 56.5914 27.0626 56.1437 27.0626 55.5914ZM34.9532 24.0914C34.9532 25.7224 33.631 27.0445 32.0001 27.0445C30.3691 27.0445 29.047 25.7224 29.047 24.0914C29.047 22.4604 30.3691 21.1383 32.0001 21.1383C33.631 21.1383 34.9532 22.4604 34.9532 24.0914Z"
                    fill="currentColor" />
                </svg>
              </div>
              <h5 class="mb-2"><b>Lost & Found</b></h5>
              <p class="features-icon-description">
                 Report or recover lost items easily. Students can post details and get notified when something is found.
              </p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center features-icon-box">
              <div class="mb-4 text-primary text-center">
                <svg width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    opacity="0.2"
                    d="M32.4999 8.46631C27.1437 8.46489 22.4012 9.93672 18.399 12.6874C14.3969 15.438 11.3233 19.3381 9.58436 23.8723C7.84542 28.4066 7.52291 33.3617 8.65945 38.0831C9.79598 42.8045 12.3381 47.0701 15.9499 50.3163C17.4549 47.3526 19.7511 44.8636 22.5841 43.125C25.417 41.3864 28.676 40.4662 32.4999 40.4663C30.0221 40.4663 28.0887 39.8798 26.4442 38.781C24.7997 37.6822 23.518 36.1204 22.7611 34.2931C22.0043 32.4659 21.8062 30.4552 22.1921 28.5154C22.5779 26.5756 23.5303 24.7938 24.9289 23.3952C26.3274 21.9967 28.1092 21.0443 30.049 20.6585C31.9888 20.2726 33.9995 20.4706 35.8268 21.2275C37.654 22.0469 39.2158 23.3286 40.3146 24.9731C41.4135 26.6176 41.9999 28.551 41.9999 30.5288C41.9999 33.181 40.9464 35.7245 39.071 37.5999C37.1956 39.4752 34.6521 40.5288 31.9999 40.5288C35.3238 40.5287 38.5829 41.4489 41.4158 43.1875C44.2487 44.9261 46.545 47.4151 48.0499 50.3788C51.6618 47.1326 54.2039 42.867 55.3404 38.1456C56.477 33.4242 56.1545 28.4691 54.4155 23.9348C52.6766 19.4006 49.603 15.5005 45.6008 12.7499C41.5987 9.99922 36.8562 8.52739 31.9999 8.52881Z"
                    fill="currentColor" />
                  <path
                    d="M32 40.5288C37.5228 40.5288 42 36.0517 42 30.5288C42 25.006 37.5228 20.5288 32 20.5288C26.4772 20.5288 22 25.006 22 30.5288C22 36.0517 26.4772 40.5288 32 40.5288ZM32 40.5288C29.1759 40.5288 26.4168 41.4477 23.5839 43.1866C20.7509 44.9255 18.4548 47.4149 16.95 50.3788M32 40.5288C35.8241 40.5288 39.0832 41.4477 41.9161 43.1866C44.7491 44.9255 47.0452 47.4149 48.55 50.3788M56 32.5288C56 45.7836 45.2548 56.5288 32 56.5288C18.7452 56.5288 8 45.7836 8 32.5288C8 19.274 18.7452 8.52881 32 8.52881C45.2548 8.52881 56 19.274 56 32.5288Z"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <h5 class="mb-2"><b>Real-Time Notifications</b></h5>
              <p class="features-icon-description">Receive instant alerts for new notices or recovered items right on your dashboard or via email.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Features with Icons: End -->
      <!-- Notic: Start -->
      <section id="landingNotice" class="section-py bg-body landing-notice">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">Pricing Plans</span>
          </div>
          <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1">Tailored pricing plans
              <img src="../../assets/img/front-pages/icons/section-title-icon.png" alt="laptop charging" class="section-title-img position-absolute object-fit-contain bottom-0 z-n1">
            </span>
            designed for you
          </h4>
          <p class="text-center pb-2 mb-7">
            All plans include 40+ advanced tools and features to boost your product.<br>Choose the best plan to fit
            your needs.
          </p>
          <div class="text-center mb-12">
            <div class="position-relative d-inline-block pt-3 pt-md-0">
              <label class="switch switch-sm switch-primary me-0">
                <span class="switch-label fs-6 text-body me-3">Pay Monthly</span>
                <input type="checkbox" class="switch-input price-duration-toggler" checked="">
                <span class="switch-toggle-slider">
                  <span class="switch-on"></span>
                  <span class="switch-off"></span>
                </span>
                <span class="switch-label fs-6 text-body ms-3">Pay Annual</span>
              </label>
              <div class="pricing-plans-item position-absolute d-flex">
                <img src="../../assets/img/front-pages/icons/pricing-plans-arrow.png" alt="pricing plans arrow" class="scaleX-n1-rtl">
                <span class="fw-medium mt-2 ms-1"> Save 25%</span>
              </div>
            </div>
          </div>
          <div class="row g-6 pt-lg-5">
            <!-- Basic Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img src="../../assets/img/front-pages/icons/paper-airplane.png" alt="paper airplane icon" class="mb-8 pb-2">
                    <h4 class="mb-0">Basic</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0 d-none">$19</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0">$14</span>
                      <sub class="h6 text-body-secondary mb-n1 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-body-secondary price-yearly-toggle">$ 168 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Timeline
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Basic search
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Live chat widget
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Email marketing
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Custom Forms
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Traffic analytics
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Basic Support
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-label-primary waves-effect">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Basic Plan: End -->

            <!-- Favourite Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card border border-primary shadow-xl">
                <div class="card-header">
                  <div class="text-center">
                    <img src="../../assets/img/front-pages/icons/plane.png" alt="plane icon" class="mb-8 pb-2">
                    <h4 class="mb-0">Team</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0 d-none">$29</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0">$22</span>
                      <sub class="h6 text-body-secondary mb-n1 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-body-secondary price-yearly-toggle">$ 264 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Everything in basic
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Timeline with database
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Advanced search
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Marketing automation
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Advanced chatbot
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Campaign management
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Collaboration tools
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-primary waves-effect waves-light">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Favourite Plan: End -->

            <!-- Standard Plan: Start -->
            <div class="col-xl-4 col-lg-6">
              <div class="card">
                <div class="card-header">
                  <div class="text-center">
                    <img src="../../assets/img/front-pages/icons/shuttle-rocket.png" alt="shuttle rocket icon" class="mb-8 pb-2">
                    <h4 class="mb-0">Enterprise</h4>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="price-monthly h2 text-primary fw-extrabold mb-0 d-none">$49</span>
                      <span class="price-yearly h2 text-primary fw-extrabold mb-0">$37</span>
                      <sub class="h6 text-body-secondary mb-n1 ms-1">/mo</sub>
                    </div>
                    <div class="position-relative pt-2">
                      <div class="price-yearly text-body-secondary price-yearly-toggle">$ 444 / year</div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled pricing-list">
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Everything in premium
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Timeline with database
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Fuzzy search
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        A/B testing sanbox
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Custom permissions
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Social media automation
                      </h6>
                    </li>
                    <li>
                      <h6 class="d-flex align-items-center mb-3">
                        <span class="badge badge-center rounded-pill bg-label-primary p-0 me-3"><i class="icon-base ti tabler-check icon-12px"></i></span>
                        Sales automation tools
                      </h6>
                    </li>
                  </ul>
                  <div class="d-grid mt-8">
                    <a href="payment-page.html" class="btn btn-label-primary waves-effect">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Standard Plan: End -->
          </div>
        </div>
      </section>
      <!-- Notic: End -->
      <!-- Lost&Found: Start -->
      <section id="landingLost&Found" class="section-py bg-body landing-lost&Found">
        <div class="container">
          <div class="text-center mb-4">
            <span class="badge bg-label-primary">FAQ</span>
          </div>
          <h4 class="text-center mb-1">
            Frequently asked
            <span class="position-relative fw-extrabold z-1"
              >questions
              <img
                src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
          </h4>
          <p class="text-center mb-12 pb-md-4">
            Browse through these FAQs to find answers to commonly asked questions.
          </p>
          <div class="row gy-12 align-items-center">
            <div class="col-lg-5">
              <div class="text-center">
                <img
                  src="{{ asset('assets/img/front-pages/landing-page/faq-boy-with-logos.png') }}"
                  alt="faq boy with logos"
                  class="faq-image" />
              </div>
            </div>
            <div class="col-lg-7">
              <div class="accordion" id="accordionExample">
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionOne"
                      aria-expanded="true"
                      aria-controls="accordionOne">
                      Do you charge for each upgrade?
                    </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps icing
                      marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                      soufflé. Wafer gummi bears marshmallow pastry pie.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionTwo"
                      aria-expanded="false"
                      aria-controls="accordionTwo">
                      Do I need to purchase a license for each website?
                    </button>
                  </h2>
                  <div
                    id="accordionTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat cake
                      dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies. Jelly
                      beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item active">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      type="button"
                      class="accordion-button"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionThree"
                      aria-expanded="false"
                      aria-controls="accordionThree">
                      What is regular license?
                    </button>
                  </h2>
                  <div
                    id="accordionThree"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Regular license can be used for end products that do not charge users for access or service(access
                      is free and there will be no monthly subscription fee). Single regular license can be used for
                      single end product and end product can be used by you or your client. If you want to sell end
                      product to multiple clients then you will need to purchase separate license for each client. The
                      same rule applies if you want to use the same end product on multiple domains(unique setup). For
                      more info on regular license you can check official description.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFour"
                      aria-expanded="false"
                      aria-controls="accordionFour">
                      What is extended license?
                    </button>
                  </h2>
                  <div
                    id="accordionFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat possimus maxime!
                      Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime, blanditiis
                      earum ea, incidunt quam possimus cumque.
                    </div>
                  </div>
                </div>
                <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button
                      type="button"
                      class="accordion-button collapsed"
                      data-bs-toggle="collapse"
                      data-bs-target="#accordionFive"
                      aria-expanded="false"
                      aria-controls="accordionFive">
                      Which license is applicable for SASS application?
                    </button>
                  </h2>
                  <div
                    id="accordionFive"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem ab cum
                      nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam quasi
                      labore enim architecto non!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Lost&Found: End -->

      <!-- About: Start -->
      <section class="py-20 bg-white" id="landingAbout">
  <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
    
    <!-- Image -->
    <div class="md:w-1/2">
      <img src="https://images.unsplash.com/photo-1581091215367-59ab6cdd89d6?auto=format&fit=crop&w=900&q=80" 
           alt="Campus Students" 
           class="rounded-2xl shadow-lg w-full object-cover">
    </div>

    <!-- Text -->
    <div class="md:w-1/2">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">About UniBoard</h2>
      <p class="text-gray-600 mb-6 leading-relaxed">
        UniBoard is a smart digital platform designed to simplify communication across campuses.
        It allows students and staff to stay up to date with important university announcements, 
        post and retrieve lost items, and build a more connected community.
      </p>
      <p class="text-gray-600 mb-8 leading-relaxed">
        Whether you’ve misplaced something or want to share campus updates, 
        UniBoard helps you do it all in one convenient and user-friendly place.
      </p>
      <a href="#" 
         class="bg-blue-600 text-white py-3 px-8 rounded-lg hover:bg-blue-700 transition">
        Learn More
      </a>
    </div>

  </div>
</section>
      <!-- About: End -->
    </div>

    <!-- / Sections:End -->

    
    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
      <div class="footer-top position-relative overflow-hidden z-1">
        <img
          src="{{ asset('assets/img/front-pages/backgrounds/footer-bg.png') }}"
          alt="footer bg"
          class="footer-bg banner-bg-img z-n1" />
        <div class="container">
          <div class="row gx-0 gy-6 g-lg-10">
            <div class="col-lg-5">
              <a href="{{ route('home') }}" class="app-brand-link mb-6">
                <span class="app-brand-logo demo">
                  <span class="text-primary">
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                        fill="currentColor" />
                      <path
                        opacity="0.06"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                        fill="#161616" />
                      <path
                        opacity="0.06"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                        fill="#161616" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                        fill="currentColor" />
                    </svg>
                  </span>
                </span>
                <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">Tirelo Capital</span>
              </a>
              <p class="footer-text footer-logo-description mb-6">
                Most developer friendly & easy to use Admin Dashboard Template.
              </p>
              <form class="footer-form">
                <label for="footer-email" class="small">Subscribe to newsletter</label>
                <div class="d-flex mt-1">
                  <input
                    type="email"
                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                    id="footer-email"
                    placeholder="Your email" />
                  <button
                    type="submit"
                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-6">Demos</h6>
              <ul class="list-unstyled">
                <li class="mb-4">
                  <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
                </li>
                <li class="mb-4">
                  <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
                </li>
                <li class="mb-4">
                  <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
                </li>
                <li class="mb-4">
                  <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link"
                    >Semi Dark Layout</a
                  >
                </li>
                <li class="mb-4">
                  <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <h6 class="footer-title mb-6">Pages</h6>
              <ul class="list-unstyled">
                <li class="mb-4">
                  <a href="pricing-page.html" class="footer-link">Pricing</a>
                </li>
                <li class="mb-4">
                  <a href="payment-page.html" class="footer-link"
                    >Payment<span class="badge bg-primary ms-2">New</span></a
                  >
                </li>
                <li class="mb-4">
                  <a href="checkout-page.html" class="footer-link">Checkout</a>
                </li>
                <li class="mb-4">
                  <a href="help-center-landing.html" class="footer-link">Help Center</a>
                </li>
                <li class="mb-4">
                  <a href="{{ route('login') }}" target="_blank" class="footer-link"
                    >Login/Register</a
                  >
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-4">
              <h6 class="footer-title mb-6">Download our app</h6>
              <a href="javascript:void(0);" class="d-block mb-4"
                ><img src="{{ asset('assets/img/front-pages/landing-page/apple-icon.png') }}" alt="apple icon"
              /></a>
              <a href="javascript:void(0);" class="d-block"
                ><img src="{{ asset('assets/img/front-pages/landing-page/google-play-icon.png') }}" alt="google play icon"
              /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom py-3 py-md-5">
        <div
          class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
          <div class="mb-2 mb-md-0">
            <span class="footer-bottom-text"
              >©
              <script>
                document.write(new Date().getFullYear());
              </script>
            </span>
            <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white">Pixinvent,</a>
            <span class="footer-bottom-text"> Made with ❤️ for a better web.</span>
          </div>
          <div>
            <a href="https://github.com/pixinvent" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.7184 2.19556C6.12757 2.19556 2.40674 5.91639 2.40674 10.5072C2.40674 14.1789 4.78757 17.2947 8.0909 18.3947C8.50674 18.4697 8.65674 18.2139 8.65674 17.9939C8.65674 17.7964 8.65007 17.2731 8.64757 16.5806C6.33507 17.0822 5.84674 15.4656 5.84674 15.4656C5.47007 14.5056 4.92424 14.2497 4.92424 14.2497C4.17007 13.7339 4.98174 13.7456 4.98174 13.7456C5.81674 13.8039 6.25424 14.6022 6.25424 14.6022C6.9959 15.8722 8.2009 15.5056 8.67257 15.2931C8.7484 14.7556 8.96507 14.3889 9.20174 14.1814C7.35674 13.9722 5.41674 13.2589 5.41674 10.0731C5.41674 9.16722 5.74091 8.42389 6.27007 7.84389C6.1859 7.63306 5.89841 6.78722 6.35257 5.64389C6.35257 5.64389 7.05007 5.41972 8.63757 6.49472C9.31557 6.31028 10.0149 6.21614 10.7176 6.21472C11.4202 6.21586 12.1196 6.31001 12.7976 6.49472C14.3859 5.41889 15.0826 5.64389 15.0826 5.64389C15.5367 6.78722 15.2517 7.63306 15.1651 7.84389C15.6984 8.42389 16.0184 9.16639 16.0184 10.0731C16.0184 13.2672 14.0767 13.9689 12.2251 14.1747C12.5209 14.4314 12.7876 14.9381 12.7876 15.7131C12.7876 16.8247 12.7776 17.7214 12.7776 17.9939C12.7776 18.2164 12.9259 18.4747 13.3501 18.3931C16.6517 17.2914 19.0301 14.1781 19.0301 10.5072C19.0301 5.91639 15.3092 2.19556 10.7184 2.19556Z"
                  fill="currentColor" />
              </svg>
            </a>
            <a href="https://www.facebook.com/pixinvents/" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.8609 18.0262V11.1962H14.1651L14.5076 8.52204H11.8609V6.81871C11.8609 6.04704 12.0759 5.51871 13.1834 5.51871H14.5868V3.13454C13.904 3.06136 13.2176 3.02603 12.5309 3.02871C10.4943 3.02871 9.09593 4.27204 9.09593 6.55454V8.51704H6.80676V11.1912H9.10093V18.0262H11.8609Z"
                  fill="currentColor" />
              </svg>
            </a>
            <a href="https://x.com/pixinvents" class="me-1 text-white" target="_blank">
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.0576 7.19293C17.0684 7.33876 17.0684 7.48376 17.0684 7.62876C17.0684 12.0663 13.6909 17.1796 7.5184 17.1796C5.61674 17.1796 3.85007 16.6288 2.3634 15.6721C2.6334 15.7029 2.8934 15.7138 3.17424 15.7138C4.68506 15.7174 6.15311 15.2122 7.34174 14.2796C6.64125 14.2669 5.96222 14.0358 5.39943 13.6185C4.83665 13.2013 4.41822 12.6187 4.00338 12.00338C3.90917 12.09759 3.79729 12.1743 3.67417 12.2483C3.55105 12.3223 3.41909 12.3485 3.28585 12.3485C3.15271 12.3485 3.02087 12.3222 2.89786 12.2713C2.77485 12.2204 2.66308 12.1457 2.56893 12.0516C2.47479 11.9574 2.4001 11.8455 2.34915 11.7226C2.2982 11.5996 2.27197 11.4677 2.27197 11.3345C2.27197 11.2014 2.2982 11.0695 2.34915 10.9465C2.4001 10.8235 2.47479 10.7117 2.56893 10.6176C2.66308 10.5234 2.77485 10.4487 2.89786 10.3978C3.02087 10.3468 3.15271 10.3206 3.28585 10.3206C3.41899 10.3206 3.55083 10.3468 3.67384 10.3978C3.79685 10.4487 3.90862 10.5234 4.00276 10.6176C4.0969 10.7117 4.17159 10.8235 4.22254 10.9465C4.27349 11.0695 4.29972 11.2014 4.29972 11.3345C4.29972 11.4677 4.27349 11.5996 4.22254 11.7226C4.17159 11.8455 4.0969 11.9574 4.00276 12.0516C3.90862 12.1457 3.79685 12.2204 3.67384 12.2713C3.55083 12.3222 3.41899 12.3485 3.28585 12.3485Z"
                    fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js -->

    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/pickr/pickr.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->

    <script src="{{ asset('assets/js/front-main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>
  </body>
</html>