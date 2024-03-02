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
                            <a href="{{ route('peminjaman.create') }}" class="mx-2">
                                <button type="button" class="btn btn-success d-flex"><i class="bi bi-plus-circle mx-2"></i>
                                    Tambah
                                    Data</button>
                            </a>
                            <a href="/cetak-peminjaman" class="mx-2">
                                <button type="button" class="btn btn-success d-flex"><i
                                        class="bi bi-file-earmark-excel mx-2"></i>
                                    Cetak Peminjaman</button>
                            </a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered my-2" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Tgl Kembali</th>
                                    <th>Status</th>
                                    <th>Peminjam</th>
                                    @can('admin-pegawai')
                                        <th>Action</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $peminjaman)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ Str::title($peminjaman->buku->judul) }}</td>
                                        <td class="text-center">{{ $peminjaman->tgl_pinjam }}</td>
                                        <td class="text-center">{{ $peminjaman->tgl_kembali }}</td>
                                        <td class="text-center">{{ Str::title($peminjaman->status_pinjam) }}</td>
                                        <td class="text-center">{{ Str::title($peminjaman->user->nama) }}</td>
                                        @can('admin-pegawai')
                                            <td>
                                                <div class="dropdown text-center">
                                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('peminjaman.edit', $peminjaman->id) }}"><i
                                                                    class="bi bi-pencil"></i>
                                                                Edit</a>
                                                        </li>
                                                        <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <li><button type="submit" class="dropdown-item" href="#"><i
                                                                        class="bi bi-trash"></i>
                                                                    Delete</button></li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </td>
                                        @endcan
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
