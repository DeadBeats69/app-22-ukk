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
                                <label for="tgl-pinjam" class="form-label">Tgl Pinjam</label>
                                <input type="date" class="form-control" id="tgl-pinjam" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="tgl-kembali" class="form-label">Tgl kembali</label>
                                <input type="date" class="form-control" id="tgl-kembali" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Status</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="">Dipinjam</option>
                                    <option value="">dikembalikan</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="peminjam" class="form-label">Peminjam</label>
                                <input type="text" class="form-control" id="peminjam" placeholder="">
                            </div>

                            <a href="/peminjaman">
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
