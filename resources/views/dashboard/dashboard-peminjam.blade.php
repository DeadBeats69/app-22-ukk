@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h1>Selamat Datang,{{ Str::title(Auth::user()->username) }}!</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pustaka Buku</h3>
                </div>
            </div>
            <section class="section min-vh-100">
                @foreach ($kategori as $kategori)
                    <span class="badge text-bg-primary my-3">{{ Str::title($kategori->kategori) }}</span>
                @endforeach
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered my-2" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover</th>
                                    <th>Judul Buku</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $buku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="width: 150px; height: 200px"><img
                                                src="{{ asset('storage/posts/' . $buku->cover) }}" alt=""
                                                class="w-100">
                                        </td>
                                        <td class="text-center">{{ Str::title($buku->judul) }}</td>
                                        <td class="text-center">{{ Str::title($buku->kategori->kategori) }}</td>
                                        <td class="text-center">{{ Str::title($buku->penulis) }}</td>
                                        <td class="text-center">{{ Str::title($buku->stok) }}</td>
                                        <td>
                                            <div class="dropdown text-center">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dashboard-admin.show', $buku->id) }}"><i
                                                                class="bi bi-eye"></i>
                                                            Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
