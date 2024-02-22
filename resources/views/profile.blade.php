@extends('layouts.pustaka')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Account Profile</h3>
                </div>

            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="avatar avatar-2xl">
                                    <img src="{{ asset('img/lib1.png') }}" style="width:200px; height:200px" alt="Avatar">
                                </div>

                                <h3 class="mt-3">Budiono Siregar</h3>
                                <p class="text-small">Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder=""
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder=""
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" aria-label="Default select example" disabled>
                                                <option>Pilih jenis kelamin</option>
                                                <option value="1" selected>Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="password" placeholder=""
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com" readonly>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" id="telepon" placeholder=""
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="textarea" class="form-control" id="alamat" placeholder=""
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="password" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Role</label>
                                            <select class="form-select" aria-label="Default select example" disabled>
                                                <option>Pilih Role</option>
                                                <option value="1" selected>Admin</option>
                                                <option value="2">Pegawai</option>
                                                <option value="3">Peminjam</option>
                                            </select>
                                        </div>


                                    </div>
                                    <div>
                                        <div class="d-flex d-flex justify-content-start">

                                            <a href="/edit-profile" class="mx-2">
                                                <button type="button"
                                                    class="btn btn-warning text-white w-100 my-2  ">Edit</button>
                                            </a>

                                        </div>
                                    </div>
                                </div>

                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection