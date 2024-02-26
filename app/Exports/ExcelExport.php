<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExcelExport implements FromCollection, WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Peminjaman::all();
    }

    public function headings(): array
    {
        return [
            'NO',
            'ID Peminjaman',
            'Judul Buku',
            'Tgl. Pinjam',
            'Tgl. Kembali',
            'Status Peminjaman',
            'Peminjam',
        ];
    }

    public function map($peminjaman):array{
        $no = 1;
        return[
            $no++,
            $peminjaman -> id,
            $peminjaman ->buku->judul,
            $peminjaman ->tgl_pinjam,
            $peminjaman ->tgl_kembali,
            $peminjaman ->status_pinjam,
            $peminjaman ->user->nama,
        ];
    }
}
