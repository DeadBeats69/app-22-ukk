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
                        <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul-buku" placeholder="" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-select" aria-label="Default select example" name="id_kategori">
                                    @foreach ($kategori as $kategori)
                                        <option value="{{ Str::title($kategori->id) }}">
                                            {{ Str::title($kategori->kategori) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" placeholder="" name="penulis">
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" placeholder="" name="penerbit">
                            </div>
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" value=""
                                    class="form-control" name="tahun_terbit">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" placeholder="" name="stok">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar/Cover</label>
                                <input type="file" class="form-control" name="cover" id="cover">
                            </div>
                            <a href="/dashboard">
                                <button type="button" class="btn btn-danger my-2 ">Batal </button>
                            </a>
                            <a href="">
                                <button type="reset" class="btn btn-warning text-white my-2 ">Reset </button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-primary my-2 ">Simpan </button>
                            </a>
                        </form>
                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
