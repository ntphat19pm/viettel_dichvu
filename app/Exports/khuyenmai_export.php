<?php

namespace App\Exports;

use App\Models\khuyenmai;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class khuyenmai_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'Tên khuyến mãi',
            'Thời gian khuyến mãi',
        ];
    }
    public function map($row): array
    {
        return [
            $row->tenkhuyenmai,
            $row->tgkhuyenmai,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return khuyenmai::all();
    }
}
