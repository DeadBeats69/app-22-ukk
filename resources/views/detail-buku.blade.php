@extends('layouts.pustaka')

@section('content')
    <div class="page-heading">
        <h3>Detail Buku</h3>
    </div>
    <div class="page-content">
        <section class="card">
            <div class="row mt-5">
                <div class="col-md-4 col-sm-12">
                    <ul>
                        <div class="row col-md-4 col-sm-12  position-absolute" style="left: 35px;">
                            <form action="{{ route('koleksi.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="hidden" name="id_buku" id="id_buku" value="{{ $buku->id }}">
                                <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id }}">
                                <button type="submit" class="btn btn-success ms-3 my-1"><i class="bi bi-bookmark"></i>
                                </button>
                            </form>
                        </div>

                        <img src="{{ asset('storage/posts/' . $buku->cover) }}" alt="" class="ms-3"
                            style="width:250px; height:300px">
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form action="" class="mx-2">
                        <div class="mb-3">
                            <label for="judul-buku" class="form-label">ID</label>
                            <input type="text" class="form-control" id="judul-buku" name="judul" placeholder=""
                                readonly value="{{ $buku->id }}">
                        </div>

                        <div class="mb-3">
                            <label for="judul-buku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul-buku" name="judul" placeholder=""
                                readonly value="{{ Str::title($buku->judul) }}">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder=""
                                readonly value="{{ Str::title($kategori->kategori) }}">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" value="{{ Str::title($buku->penulis) }}"
                                name="penulis" id="penulis" placeholder="" value="Budiono Siregar" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" value="{{ Str::title($buku->penerbit) }}"
                                name="penerbit" id="penerbit" placeholder="" value="Sinarmas" readonly>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 px-sm-3">
                    <form action="" class="mx-2">
                        <div class="row">
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" value="2005"
                                    class="form-control" value="{{ $buku->tahun_terbit }}" name="tahun_terbit" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" value="{{ $buku->stok }}" id="stok"
                                    placeholder="" value="20" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" style="height:120px" readonly>{{ $buku->deskripsi }}</textarea>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <div class="d-flex d-flex justify-content-center mx-3">
                @can('admin-pegawai')
                    <a href="{{ route('dashboard-admin.edit', $buku->id) }}" class="mx-2">
                        <button type="button" class="btn btn-warning text-white w-100 my-2  ">Edit</button>
                    </a>
                @endcan
            </div>
        </section>

        <section class="ulasan min-vh-100">
            <div class="card min-vh-100">
                <div class="card-header">
                    <ul class="d-flex justify-content-between">
                        <h3>Ulasan</h3>
                        <a href="{{ route('ulas.create', $buku->id) }}">
                            <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                                Berikan
                                Ulasan</button>
                        </a>
                    </ul>
                </div>
                <div class="card-body">
                    @foreach ($ulas as $ulas)
                        <div class="card shadow" style="background-color: #ffffff">
                            <div class="card-body">
                                <span class="fs-5 fw-bold">{{ Str::title($ulas->user->username) }}</span>
                                <div class="d-flex justify-content-end">
                                    @if ($ulas->id_user == Auth::user()->id)
                                        <a type="submit" class="btn" href='{{ route('ulas.edit', $ulas->id) }}'><i
                                                class="bi bi-pencil"></i>
                                            edit</a>
                                        <form action="{{ route('ulas.destroy', $ulas->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn" href='ulas.destroy'><i
                                                    class="bi bi-trash"></i>
                                                Delete</button>
                                        </form>
                                    @endif
                                </div>
                                <br>
                                <span class="mb-3">Rating : {{ $ulas->rating }} <i class="bi bi-star-fill"
                                        style="color: yellow"></i></span>
                                <p>
                                    {{ $ulas->ulasan }}
                                </p>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
