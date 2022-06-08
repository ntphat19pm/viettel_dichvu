<?php

namespace App\Exports;

use App\Models\dichvu;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class dichvu_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'Tên dịch vụ',
            'Thời gian',
            'Khuyến mãi',
            'Giá',
        ];
    }
    public function map($row): array
    {
        return [
            $row->tendv,
            $row->thoigian,
            $row->khuyenmai,
            $row->gia,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dichvu::all();
    }
}
