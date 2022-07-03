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
            'Cấp học',
            'Loại hình đào tạo',
            'Người đại diện',
            'Số điện thoại',
            'Huyện',
            'Địa chỉ',
            'Số điện thoại cơ quan',
        ];
    }
    public function map($row): array
    {
        return [
            $row->mst,
            $row->matruong,
            $row->tendoanhnghiep,
            $row->caphoc,
            $row->loaihinh,
            $row->nguoidaidien,
            $row->sdt,
            $row->huyen,
            $row->diachi,
            $row->coquan,
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
