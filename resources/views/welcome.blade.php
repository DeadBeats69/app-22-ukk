@extends('layouts.main')
@section('section')

    <body style="font-family: nunito">
        <div class= "container-fluid navbar-bg text-light">
            {{-- navbar --}}
            <nav class="navbar important navbar-expand-lg">
                <div class="container text-light">
                    <a class="navbar-brand text-light fw-bold mx-2" href="/">LeVivli</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#home"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center mx-2" id="navbarNavAltMarkup">
                        <div class="navbar-nav d-flex text-light ">
                            <a class="nav-link active text-light" aria-current="page" href=".#home">Home</a>
                            <a class="nav-link mx-5 text-light" href="#about">About us</a>
                            <a class="nav-link text-light" href="#footer">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
            {{-- navbar end --}}
        </div>

        {{-- section home --}}
        <section class="home" id="home">
            <div class="container-fluid background text-light min-vh-100 d-flex align-items-center"
                style="background-repeat:repeat; background-image: url({{ asset('img/lib1.png') }});">
                <div class="container justify-content-center">
                    <div class="text-mid">
                        <h1>Cari dan Temukan Buku Yang Kamu Mau</h1>
                        <p>
                            LeVivli memudahkan mencari dan menemukan
                            buku dimanapun dan kapanpun
                        </p>
                        @if (Auth::check())
                            <a href="/dashboard" class="btn btn-1 px-4 text-light" type="button"
                                style="background-color: #11235A"> <span>Dashboard</span> <i
                                    class="bi bi-box-arrow-in-right icon-btn-1 ms-2"></i></a>
                        @else
                            <a href="/login" class="btn btn-1 px-4 text-light" type="button"
                                style="background-color: #11235A"> <span>Login</span> <i
                                    class="bi bi-box-arrow-in-right icon-btn-1 ms-2"></i></a>
                        @endif

                    </div>

                </div>

            </div>
        </section>
        {{-- section home end --}}

        {{-- section about --}}
        <section class="about" id="about">
            <div class="container-fluid min-vh-100">
                <div class="container">
                    <div class="row">
                        <h1 class="d-flex justify-content-start mt-5 mx-3 fw-bold about-us">About LeVivli</h1>
                        <div class="col my-3 mx-3">
                            <p>LeVivli adalah sebuah aplikasi perpustakaan digital berbasis website.Nama LeVivli diambil
                                dari bahasa Yunani βιβλίο (Vivlio) yang berarti buku.Levivli merupakan aplikasi yang
                                bertujuan untuk mempermudah dalam pencarian buku atau proses peminjaman buku perpustakaan.
                            </p>
                            <p>
                                LeVivli ini menunjang pada proses peminjaman buku,penambahan buku,memberikan ulasan pada
                                buku dan lainnya.
                            </p>
                        </div>
                        <div class="col ">
                            <img src="{{ asset('img/Bibliophile-rafiki.png') }}" alt="Bibliophile" width="500"
                                class="bibli">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- section about end --}}

        <!-- Footer Start -->
        <footer class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <h2 class="text-center fw-bold mt-3">Kontak Kami</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-3">
                        <div class="footer-col">
                            <img src="{{ asset('img/phone.png') }}" alt="phone" width="50px" class="me-3">
                            0821-9813-2745
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-col footer-col-socmed">
                            <ul class="socmed-footer">
                                <a href="https://facebook.com">

                                    <a class="btn btn-socmed-footer px-4" type="button"><img
                                            src="{{ asset('img/fb.png') }}" alt="facebook" width="50px"></a>

                                </a>

                                <a href="https://instagram.com">

                                    <a class="btn btn-socmed-footer px-4" type="button"><img
                                            src="{{ asset('img/ig.png') }}" alt="instagram" width="50px"></a>

                                </a>

                                <a href="https://twitter.com" target="_blank">

                                    <a class="btn btn-socmed-footer px-4" type="button"><img
                                            src="{{ asset('img/twt.png') }}" alt="tiwtter" width="50px"></a>
                                </a>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 ">
                        <div class="footer-col">
                            <ul>
                                <li class=" list-group-item my-2">
                                    <img src="{{ asset('img/mail.png') }}" alt="email" width="50px" class="me-3">
                                    LeVivli@gmail.com
                                </li>
                                <li class="list-group-item my-2">
                                    <img src="{{ asset('img/adress.png') }}" alt="address" width="50px" class="me-3">
                                    Jl.Sukamaju No.24, Jakarta

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                <div class="col-lg-12">
                    <p class="copyright-text">Copyright &copy; 2023 Dispress. All rights reserved</p>
                </div>
            </div> --}}
            </div>
        </footer>
        <!-- Footer End -->




    </body>
@endsection
