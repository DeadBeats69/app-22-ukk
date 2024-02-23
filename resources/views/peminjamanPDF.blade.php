<div class=>
    <table class="table table-striped table-bordered my-2" id="table1">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Peminjam</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $peminjaman)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-center">{{ Str::title($peminjaman->buku->judul) }}</td>
                    <td class="text-center">{{ $peminjaman->tgl_pinjam }}</td>
                    <td class="text-center">{{ $peminjaman->tgl_kembali }}</td>
                    <td class="text-center">{{ Str::title($peminjaman->status_pinjam) }}</td>
                    <td class="text-center">{{ Str::title($peminjaman->user->nama) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
