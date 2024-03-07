@extends('layouts.pustaka')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Peminjaman</h3>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="judul-buku" class="form-label">Judul Buku</label>
                                <select class="form-select" name="id_buku" aria-label="Default select example">
                                    @foreach ($bukuList as $buku)
                                        <option
                                            value="{{ $buku->id }}"{{ $buku->id == $peminjaman->buku->id ? 'selected' : '' }}>
                                            {{ $buku->judul }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tgl-pinjam" class="form-label">Tgl Pinjam</label>
                                <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam"
                                    value="{{ $peminjaman->tgl_pinjam }}" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="tgl-kembali" class="form-label">Tgl kembali</label>
                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali"
                                    value="{{ $peminjaman->tgl_kembali }}" placeholder="">
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label">Status</label>
                                <select class="form-select" name="status_pinjam" aria-label="Default select example">
                                    <option value="dipinjam"
                                        {{ $peminjaman->status_pinjam == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                                    <option value="dikembalikan"
                                        {{ $peminjaman->status_pinjam == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan
                                    </option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="jml_pinjam" class="form-label">Jumlah Pinjam</label>
                                <input type="number" class="form-control" id="jml_pinjam" placeholder="" name="jml_pinjam"
                                    value="{{ $peminjaman->jml_pinjam }}">
                            </div>


                            <div class="mb-3">
                                <label for="peminjam" class="form-label">Peminjam</label>
                                <input type="text" class="form-control" id="jml_pinjam" placeholder=""
                                    value="{{ $peminjaman->user->nama }}" min="1" max="3" readonly>
                                <input type="text" class="form-control" id="jml_pinjam" placeholder="" name="id_user"
                                    value="{{ $peminjaman->id_user }}" hidden>

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
