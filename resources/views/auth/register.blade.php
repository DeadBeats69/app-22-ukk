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
                <div class="card-body">
                    <div class="container">

                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama"
                                            placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jk" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih jenis kelamin</option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="password"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="example@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Telepon</label>
                                        <input type="number" class="form-control" id="telepon"
                                            placeholder="" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="textarea" class="form-control" id="telepon"
                                        placeholder="" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="********">
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex d-flex justify-content-center">

                                        <button type="submit" class="btn text-light w-100 my-2 "
                                            style="background-color:#041185 ">Submit</button>
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
