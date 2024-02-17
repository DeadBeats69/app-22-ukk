@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Peminjaman</h3>
                </div>
            </div>
            <section class="section min-vh-100">
                <div class="card">
                    <div class="card-header">
                        <ul class="d-flex justify-content-end">
                            <a href="/form-peminjaman" class="mx-2">
                                <button type="button" class="btn btn-success d-flex"><i class="bi bi-plus-circle mx-2"></i>
                                    Tambah
                                    Data</button>
                            </a>
                            <a href="/export-peminjaman" class="mx-2">
                                <button type="button" class="btn btn-success d-flex"><i
                                        class="bi bi-file-earmark-excel mx-2"></i>
                                    Export Peminjaman</button>
                            </a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Tgl Kembali</th>
                                    <th>Status</th>
                                    <th>Peminjam</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-center">Kapal Laut</td>
                                    <td class="text-center">20-2-2024</td>
                                    <td class="text-center">27-2-2024</td>
                                    <td class="text-center">Dipinjam</td>
                                    <td class="text-center">Ahmad</td>
                                    <td>
                                        <div class="dropdown text-center">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-eye"></i>
                                                        Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i>
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

    </div>
@endsection
