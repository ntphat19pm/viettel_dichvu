<?php

namespace App\Imports;

use App\Models\doanhnghiep;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class doanhnghiep_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new doanhnghiep([
            'mst' => $row['ma_so_thue'],
            'matruong' => $row['ma_truong'],
            'tendoanhnghiep' => $row['ten_doanh_nghiep'],
            'caphoc' => $row['cap_hoc'],
            'loaihinh' => $row['loai_hinh_dao_tao'],
            'diachi' => $row['dia_chi'],
            'nguoidaidien' => $row['nguoi_dai_dien'],
            'huyen' => $row['huyen'],
            'sdt' => $row['so_dien_thoai'],
            'coquan' => $row['so_dien_thoai_co_quan'],
        ]);
    }
}
