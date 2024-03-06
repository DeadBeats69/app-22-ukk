@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Pengguna</h3>
                </div>
            </div>
            <section class="section min-vh-100">
                <div class="card">
                    <div class="card-header">
                        <ul class="d-flex justify-content-end">
                            <a href="{{ route('data-pengguna.create') }}">
                                <button type="button" class="btn btn-success d-flex"><i class="bi bi-plus-circle me-1"></i>
                                    Tambah
                                    Pengguna</button>
                            </a>
                        </ul>
                    </div>
                    <div class="card-body min-vh-100">
                        <table class="table table-striped table-bordered my-2" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Str::title($user->nama) }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ Str::title($user->role) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('data-pengguna.show', $user->id) }}"><i
                                                                class="bi bi-eye"></i>
                                                            Detail</a></li>
                                                    @can('admin')
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('data-pengguna.edit', $user->id) }}"><i
                                                                    class="bi bi-pencil"></i>
                                                                Edit</a>
                                                        </li>
                                                        <form action="{{ route('data-pengguna.destroy', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <li><button type="submit" class="dropdown-item" href="#"><i
                                                                        class="bi bi-trash"></i>
                                                                    Delete</button></li>
                                                        </form>
                                                    @endcan
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
