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
                                    <img src="{{ asset('storage/posts/' . $user->gambar) }}"
                                        style="width:200px; height:200px" alt="Avatar">
                                </div>

                                <h3 class="mt-3">{{ Str::title($user->username) }}</h3>
                                <p class="text-small">{{ Str::title($user->role) }}</p>
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
                                                value="{{ Str::title($user->username) }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" placeholder=""
                                                value="{{ Str::title($user->nama) }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jk" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori"
                                                placeholder="" readonly value="{{ $user->jk }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl-lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="password"
                                                placeholder=""value="{{ $user->tgl_lahir }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com" value="{{ $user->email }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="example@gmail.com" value="{{ $user->email }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telepon" class="form-label">Telepon</label>
                                            <input type="number" class="form-control" id="telepon" placeholder=""
                                                value="{{ $user->telepon }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Role" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="role" placeholder=""
                                                value="{{ Str::title($user->role) }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="d-block w-100 form-control" readonly>{{ Str::title($user->alamat) }}</textarea>
                                        </div>


                                    </div>
                                    <div>
                                        <div class="d-flex d-flex justify-content-start">
                                            @can('admin-pegawai')
                                                <a href="{{ route('data-pengguna.edit', $user->id) }}" class="mx-2">
                                                    <button type="button"
                                                        class="btn btn-warning text-white w-100 my-2  ">Edit</button>
                                                </a>
                                            @endcan

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
