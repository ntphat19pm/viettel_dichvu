<?php

namespace App\Imports;

use App\Models\khuyenmai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class khuyenmai_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new khuyenmai([
            'tenkhuyenmai' => $row['ten_khuyen_mai'],
            'tgkhuyenmai' => $row['thoi_gian_khuyen_mai'],
        ]);
    }
}
