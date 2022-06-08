<?php

namespace App\Imports;

use App\Models\dichvu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class dichvu_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dichvu([
            'tendv' => $row['ten_dich_vu'],
            'thoigian' => $row['thoi_gian'],
            'khuyenmai' => $row['khuyen_mai'],
            'gia' => $row['gia'],
        ]);
    }
}
