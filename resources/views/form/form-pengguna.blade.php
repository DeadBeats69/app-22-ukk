@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Buku</h3>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" placeholder="">
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
                                        <input type="date" class="form-control" id="password" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="example@gmail.com">
                                    </div>
                                </div>

                                <div class="col">

                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Telepon</label>
                                        <input type="number" class="form-control" id="telepon" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="textarea" class="form-control" id="alamat" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="********">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jk" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Role</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Pegawai</option>
                                            <option value="3">Peminjam</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Foto Profile</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>


                                </div>
                                <div>
                                    <div class="d-flex d-flex justify-content-start">

                                        <a href="/data-pengguna" class="mx-2">
                                            <button type="button"
                                                class="btn btn-danger text-white w-100 my-2  ">Batal</button>
                                        </a>
                                        <a href="" class="mx-2">
                                            <button type="reset"
                                                class="btn btn-warning text-white w-100 my-2  ">Reset</button>
                                        </a>
                                        <a href="" class="mx-2">
                                            <button type="submit"
                                                class="btn btn-success text-white w-100 my-2  ">Tambah</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
