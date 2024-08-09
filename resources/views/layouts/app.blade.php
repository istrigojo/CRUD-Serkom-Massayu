<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Asesmen Massayu</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon" />
        <link
            href="{{ asset('img/apple-touch-icon.png') }}"
            rel="apple-touch-icon"
        />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link
            href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}"
            rel="stylesheet"
        />
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" />
        <link
            href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}"
            rel="stylesheet"
        />
        <link
            href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}"
            rel="stylesheet"
        />

        <!-- Main CSS File -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" />

        <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center sticky-top">
            <div
                class="container-fluid position-relative d-flex align-items-center justify-content-between"
            >
                <a
                    href="index.html"
                    class="logo d-flex align-items-center me-auto me-xl-0"
                >
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.png" alt=""> -->
                    <h1 class="sitename">LSP UBSI</h1>
                    <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu d-flex justify-content-center mx-auto">
                    <ul>
                        <li><a href="{{ route('asesmen.index') }}" class="active">CRUD Serkom Massayu</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                {{-- <a class="btn-getstarted" href="index.html#about"
                    >Get Started</a
                > --}}
            </div>
        </header>

        <main class="main">

            <!-- Features Section -->
            <section id="features" class="features section">
                <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
                <h1>Asesmen Sertifikasi Kompetensi - <span>LSP UBSI</span></h1>
                </div>
                <div class="container" data-aos="fade-up">
                    <ul class="nav nav-tabs row gy-4 d-flex justify-content-center">
                        <li class="nav-item col-6 col-md-4 col-lg-2">
                            <a
                                class="nav-link {{ strpos(Route::currentRouteName(), 'asesmen') !== false ? 'nav-item active' : 'nav-item' }}"
                                href="{{ route('asesmen.index') }}"
                            >
                                <i
                                    class="bi bi-binoculars"
                                    style="color: #0dcaf0"
                                ></i>
                                <h4>Asesmen</h4>
                            </a>
                        </li>
                        <!-- End Tab 1 Nav -->

                        <li class="nav-item col-6 col-md-4 col-lg-2">
                            <a
                                class="nav-link {{ strpos(Route::currentRouteName(), 'skema') !== false ? 'nav-item active' : 'nav-item' }}"
                                href="{{ route('skema.index') }}"
                            >
                                <i
                                    class="bi bi-box-seam"
                                    style="color: #6610f2"
                                ></i>
                                <h4>Skema</h4>
                            </a>
                        </li>
                        <!-- End Tab 2 Nav -->

                    </ul>

                    
                    <div class="tab-content">

                        {{-- Start Template Layout --}}

                        @yield('content')

                        {{-- End Template Layout --}}

                    </div>
                </div>
            </section>
            <!-- /Features Section -->
        </main>

        <!-- Scroll Top -->
        <a
            href="#"
            id="scroll-top"
            class="scroll-top d-flex align-items-center justify-content-center"
            ><i class="bi bi-arrow-up-short"></i
        ></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
        @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}"
                });
            </script>
        @endif
        <script>
            function confirmDelete(id) {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                })
            }
            </script>
    </body>
</html>
