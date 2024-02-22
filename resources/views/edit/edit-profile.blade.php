@extends('layouts.pustaka')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Profile</h3>
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
                                    <img src="{{ asset('storage/posts/' . $user->gambar) }}"
                                        style="width:200px; height:200px" alt="Avatar">
                                </div>

                                <h3 class="mt-3">{{ $user->nama }}</h3>
                                <p class="text-small">{{ Str::title($user->role) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('data-pengguna.update', $user->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder=""
                                                name="username" value="{{ $user->username }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder=""
                                                name="nama" value="{{ $user->nama }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <select class="form-select" name="jk" aria-label="Default select example">
                                                <option value="L"{{ $user->jk == 'L' ? 'selected' : '' }}>Laki-Laki
                                                </option>
                                                <option value="P"{{ $user->jk == 'P' ? 'selected' : '' }}>Perempuan
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tgl_lahir" placeholder=""
                                                name="tgl_lahir" value="{{ $user->tgl_lahir }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com" name="email" value="{{ $user->email }}">
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" id="telepon" placeholder=""
                                                name="telepon" value="{{ $user->telepon }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="textarea" class="form-control" id="alamat" placeholder=""
                                                name="alamat" value="{{ $user->alamat }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="password" placeholder=""
                                                name="password" value="{{ $user->password }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Role</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="role">
                                                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                                                    Admin
                                                </option>
                                                <option value="pegawai" {{ $user->role == 'pegawai' ? 'selected' : '' }}>
                                                    Pegawai
                                                </option>
                                                <option value="peminjam"
                                                    {{ $user->role == 'peminjam' ? 'selected' : '' }}>
                                                    Peminjam
                                                </option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pp" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" name="gambar" id="gambar">
                                        </div>
                                        <input type="hidden" name="password" value="{{ $user->password }}">

                                    </div>
                                    <div>
                                        <div class="d-flex d-flex justify-content-start">

                                            <a href="/profile" class="mx-2">
                                                <button type="button"
                                                    class="btn btn-danger text-white w-100 my-2  ">Batal</button>
                                            </a>
                                            <a href="" class="mx-2">
                                                <button type="reset"
                                                    class="btn btn-warning text-white w-100 my-2  ">Reset</button>
                                            </a>
                                            <a href="" class="mx-2">
                                                <button type="submit"
                                                    class="btn btn-success text-white w-100 my-2  ">Simpan</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
