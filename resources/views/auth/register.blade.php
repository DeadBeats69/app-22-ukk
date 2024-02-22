@extends('layouts.main')
@section('section')

    <body style="font-family: nunito">


        <div class="container-fluid background text-light min-vh-100 d-flex align-items-center"
            style="background-size: cover;background-repeat:no-repeat; background-image: url({{ asset('img/lib1.png') }})">
            <div class="container d-flex  justify-content-center">

                <div class="card card-login text-light" style="width: 100%; height: 100%; background-color:#28355E">
                    <a href="/" class="text-light my-2 d-flex justify-content-start">
                        <h3 class="bi bi-arrow-left-circle-fill ms-3 mt-3"></h3>
                    </a>

                    <h3 class="card-title fw-bold my-3 text-center">Daftar</h3>

                    @if (Session::has('errors'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('errors') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="container">
                            <form action="/register" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" id="username"
                                                placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" id="nama"
                                                placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" name="jk" aria-label="Default select example">
                                                <option selected>Pilih jenis kelamin</option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" id="password"
                                                placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="example@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" name="telepon" class="form-control" id="telepon"
                                                placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="********">
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Foto Profile</label>
                                            <input type="file" class="form-control" name="gambar" id="image">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="d-block w-100"></textarea>
                                        </div>


                                    </div>
                                    <div>
                                        <div class="d-flex d-flex justify-content-center">
                                            <button type="submit" class="btn text-light my-2 w-100 "
                                                style="background-color:#041185 ">Daftar</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>
@endsection