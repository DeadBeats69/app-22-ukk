@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Kategori</h3>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    @can('admin-pegawai')
                        <div class="card-header">
                            <ul class="d-flex justify-content-end me-4">
                                <a href="{{ route('kategori.create') }}">
                                    <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                                        Tambah Kategori</button>
                                </a>
                            </ul>
                        </div>
                    @endcan
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-striped table-bordered my-2" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        @can('admin-pegawai')
                                            <th>Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $kategori)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ Str::title($kategori->kategori) }}</td>
                                            @can('admin-pegawai')
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('kategori.edit', $kategori->id) }}"><i
                                                                        class="bi bi-pencil"></i>
                                                                    Edit</a>
                                                            </li>
                                                            <form action="{{ route('kategori.destroy', $kategori->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <li><button type="submit" class="dropdown-item"
                                                                        href="#"><i class="bi bi-trash"></i>
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
                </div>

            </section>
        </div>

    </div>
@endsection
