@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Buku</h3>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul-buku" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">comedy</option>
                                    <option value="">action</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" value=""
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="textarea" class="form-control" id="deskripsi" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar/Cover</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <a href="/data-buku">
                                <button type="button" class="btn btn-danger my-2 ">Batal </button>
                            </a>
                            <a href="">
                                <button type="reset" class="btn btn-warning text-white my-2 ">Reset </button>
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
