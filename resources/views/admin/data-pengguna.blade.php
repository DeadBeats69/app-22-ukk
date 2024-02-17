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
                            <a href="/form-pengguna">
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
                                <tr>
                                    <td>1</td>
                                    <td>Budiono Siregar</td>
                                    <td>budiono@gmail.com</td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="dropdown">
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
