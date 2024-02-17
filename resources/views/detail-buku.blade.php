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
                        <a href="/ulasan">
                            <button type="button" class="btn btn-success ms-3 my-1"><i class="bi bi-plus-circle"></i>
                                Tambah Koleksi</button>
                        </a>

                        <img src="{{ asset('img/lib1.png') }}" alt="" class="ms-3"
                            style="width:200px; height:200px">
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <form action="" class="mx-2">
                        <div class="mb-3">
                            <label for="judul-buku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul-buku" placeholder="" readonly
                                value="Kapal Laut">
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori" placeholder="" readonly
                                value="comedy">
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" placeholder="" value="Budiono Siregar"
                                readonly>
                        </div>

                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" placeholder="" value="Sinarmas"
                                readonly>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12 px-sm-3">
                    <form action="" class="mx-2">
                        <div class="row">
                            <div class="mb-3">
                                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                                <input type="number" min="1900" max="2099" step="1" value="2005"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" placeholder="" value="20"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" style="height:120px" readonly>Buku yang bercerita tentang kapal laut</textarea>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
            <div class="d-flex d-flex justify-content-center mx-3">

                <a href="/edit-buku" class="mx-2">
                    <button type="button" class="btn btn-warning text-white w-100 my-2  ">Edit</button>
                </a>
            </div>
        </section>

        <section class="ulasan min-vh-100">
            <div class="card min-vh-100">
                <div class="card-header">
                    <ul class="d-flex justify-content-between">
                        <h3>Ulasan</h3>
                        <a href="/form-ulas">
                            <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                                Berikan
                                Ulasan</button>
                        </a>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered my-2" id="myTable">
                        <thead>
                            <tr>
                                <th>Ulasan</th>
                                <th>Rating</th>
                                <th>Pemberi Ulasan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kapal Laut</td>
                                <td>5</td>
                                <td>Ahmad</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="/edit-ulas"><i class="bi bi-pencil"></i>
                                                    Edit</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
