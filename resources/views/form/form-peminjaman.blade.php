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
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">Judul Buku</label>
                                <select class="form-select" name="id_buku" aria-label="Default select example">
                                    @foreach ($buku as $buku)
                                        <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tgl_pinjam" class="form-label">Tgl Pinjam</label>
                                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="tgl_kembali" class="form-label">Tgl kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali"
                                    placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Status</label>
                                <select class="form-select" name="status_pinjam" aria-label="Default select example">
                                    <option value="dipinjam">Dipinjam</option>
                                    <option value="dikembalikan">Dikembalikan</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="peminjam" class="form-label">Peminjam</label>
                                <select class="form-select" name="id_user" aria-label="Default select example">
                                    @foreach ($user as $user)
                                        <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <a href="/peminjaman">
                                <button type="button" class="btn btn-danger my-2 ">Batal </button>
                            </a>
                            <a href="">
                                <button type="reset" class="btn btn-warning text-white my-2 ">Reset </button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-primary my-2 ">Simpan </button>
                            </a>
                        </form>
                    </div>
                </div>

            </section>
        </div>

    </div>
@endsection
