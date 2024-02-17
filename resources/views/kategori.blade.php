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
                    <div class="card-header">
                        <ul class="d-flex justify-content-end me-4">
                            <a href="/form-kategori">
                                <button type="button" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                                    Tambah Kategori</button>
                            </a>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-striped table-bordered my-2" id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>comedy</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
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
                        </div>s
                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
