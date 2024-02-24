@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Koleksi Buku Kamu</h3>
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
                                    <th>Penulis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($koleksi as $koleksi)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td style="width: 150px; height: 200px"><img
                                                src="{{ asset('storage/posts/' . $koleksi->buku->cover) }}" alt=""
                                                class="w-100">
                                        </td>
                                        <td class="text-center">{{ Str::title($koleksi->buku->judul) }}</td>
                                        <td class="text-center">{{ Str::title($koleksi->buku->penulis) }}</td>
                                        <td>
                                            <div class="dropdown text-center">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dashboard.show', $koleksi->buku->id) }}"><i
                                                                class="bi bi-eye"></i>
                                                            Detail</a></li>
                                                    <form action="{{ route('koleksi.destroy', $koleksi->id) }}"
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
