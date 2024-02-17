@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambahkan Kategori</h3>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            {{-- <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ID kategori</label>
                                            <input type="text" class="form-control" id="username" placeholder=""
                                                disabled>
                                        </div> --}}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="judul-buku" placeholder="">
                            </div>
                            <a href="/kategori">
                                <button type="button" class="btn btn-danger my-2 ">Batal </button>
                            </a>
                            <a href="/data-buku">
                                <button type="reset" class="btn btn-warning my-2 text-white">Reset </button>
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
@endsection
