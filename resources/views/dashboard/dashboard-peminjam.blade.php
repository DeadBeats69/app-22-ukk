@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-3">
                    <h1>Selamat Datang,Peminjam!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pustaka Buku</h3>
                </div>
            </div>
            <section class="section min-vh-100">
                <div class="card">

                    <div class="card-body">
                        <table class="table table-striped table-bordered my-2" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td style="width: 150px; height: 200px"><img src="{{ asset('img/lib1.png') }}"
                                            alt="" class="w-100">
                                    </td>
                                    <td class="text-center">Kapal Laut</td>
                                    <td class="text-center">Budiono Siregar</td>
                                    <td class="text-center">10</td>
                                    <td>
                                        <div class="dropdown text-center">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/detail-buku"><i class="bi bi-eye"></i>
                                                        Detail</a></li>
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