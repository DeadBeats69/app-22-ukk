@extends('layouts.pustaka')

@section('content')
    <div class="page-heading">
        <h3>Edit Buku</h3>
    </div>
    <div class="page-content">
        <section class="card">
            <div class="row mt-5">
                <div class="col-md-4 col-sm-12">
                    <ul>
                        <img src="{{ asset('img/lib1.png') }}" alt="" class="ms-3" style="width:200px; height:200px">
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form action="" class="mx-2">
                        <div class="mb-3">
                            <label for="judul-buku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul-buku" placeholder="" value="Kapal Laut">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="" value="comedy">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" placeholder=""
                                value="Budiono Siregar">
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="" value="Sinarmas">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar/Cover</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 px-sm-3">
                    <form action="" class="mx-2">
                        <div class="row">
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" value="2005"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" placeholder="" value="20">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" style="height:120px">Buku yang bercerita tentang kapal laut</textarea>
                            </div>

                        </div>

                    </form>
                </div>
                <div>
                    <div class="d-flex d-flex justify-content-center mx-3">

                        <a href="/detail-buku" class="mx-2">
                            <button type="button" class="btn btn-danger text-white w-100 my-2  ">Batal</button>
                        </a>
                        <a href="" class="mx-2">
                            <button type="reset" class="btn btn-warning text-white w-100 my-2  ">Reset</button>
                        </a>
                        <a href="" class="mx-2">
                            <button type="submit" class="btn btn-primary text-white w-100 my-2  ">Simpan</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
