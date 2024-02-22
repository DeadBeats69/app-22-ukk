@extends('layouts.pustaka')

@section('content')
    <form action="{{ route('dashboard.update', $buku->id) }}" method="POST" enctype="multipart/form-data" class="mx-2">
        @method('PUT')
        @csrf
        <div class="page-heading">
            <h3>Edit Buku</h3>
        </div>
        <div class="page-content">
            <section class="card">
                <div class="row mt-5">
                    <div class="col-md-4 col-sm-12">
                        <ul>
                            <img src="{{ asset('storage/posts/' . $buku->cover) }}" alt="" class="ms-3"
                                style="width:200px; height:200px">
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12">

                        <div class="mb-3">
                            <label for="judul-buku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul-buku" placeholder="" name="judul"
                                value="{{ $buku->judul }}">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Kategori</label>
                            <select class="form-select" name="id_kategori" aria-label="Default select example">
                                @foreach ($kategori as $kategori)
                                    <option
                                        value="{{ $kategori->id }}"{{ $kategori->id == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" placeholder="" name="penulis"
                                value="{{ $buku->penulis }}">
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="" name="penerbit"
                                value="{{ $buku->penerbit }}">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Gambar/Cover</label>
                            <input type="file" class="form-control" name="cover" id="cover"
                                value="{{ $buku->cover }}">
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-12 px-sm-3">

                        <div class="row">
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" name="tahun_terbit"
                                    value="{{ $buku->tahun_terbit }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" placeholder="" name="stok"
                                    value="{{ $buku->stok }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" name="deskripsi" style="height:120px">{{ $buku->deskripsi }}</textarea>
                            </div>

                        </div>


                    </div>
                    <div>
                        <div class="d-flex d-flex justify-content-center mx-3">

                            <a href="/dashboard" class="mx-2">
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
    </form>
@endsection
