<?php

namespace App\Exports;

use App\Models\doanhnghiep;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class doanhnghiep_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'Mã số thuế',
            'Mã trường',
            'Tên doanh nghiệp',
            'Địa chỉ',
            'Người đại diện',
            'Số điện thoại',
        ];
    }
    public function map($row): array
    {
        return [
            $row->mst,
            $row->matruong,
            $row->tendoanhnghiep,
            $row->diachi,
            $row->nguoidaidien,
            $row->sdt,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return doanhnghiep::all();
    }
}
