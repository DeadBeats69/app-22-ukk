@extends('layouts.pustaka')
@section('content')

    <body>
        <script src="assets/static/js/initTheme.js"></script>
        <div id="app">
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Buat Ulasan</h3>
                            </div>
                        </div>
                        <section class="section">
                            <div class="card">
                                <div class="card-body">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="username" placeholder=""
                                                disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Judul Buku</label>
                                            <input type="text" class="form-control" id="judul-buku" placeholder=""
                                                disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Komentar</label>
                                            <input type="textarea" class="form-control" id="komentar" placeholder=""
                                                maxlength="255">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Beri Rating</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <a href="/detail">
                                            <button type="button" class="btn btn-danger my-2 ">Batal </button>
                                        </a>
                                        <a href="/data-buku">
                                            <button type="reset" class="btn btn-danger my-2 ">Reset </button>
                                        </a>
                                        <a href="">
                                            <button type="submit" class="btn btn-primary my-2 ">Kirim </button>
                                        </a>
                                    </form>
                                </div>
                            </div>

                        </section>
                    </div>

                </div>
            </div>


    </body>
@endsection
