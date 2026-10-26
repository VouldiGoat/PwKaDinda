<?php

namespace App\Exports;

use App\Models\Guru;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GuruExport implements FromCollection, WithHeadings, WithMapping
{
private $no = 0;

    public function collection(): collection
    {
        return Guru::select('nama', 'nip', 'mapel', 'alamat')->get();
    }
    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIP',
            'Mata Pelajaran',
            'Alamat'
        ];
    }

    public function map($guru): array
    {
        $this->no++;
        return [
            $this->no,
            $guru->nama,
            $guru->nip,
            $guru->mapel,
            $guru->alamat
        ];
    }
}