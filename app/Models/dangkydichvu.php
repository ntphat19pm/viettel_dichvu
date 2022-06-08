<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dangkydichvu extends Model
{
    use HasFactory;

    protected $table = 'dangkydichvu';

    protected $fillable = [
        'doanhnghiep_id',
        'dichvu_id',
        'ngaydangky',
        'ngayketthuc'
    ];
    public function dichvu(){
        return $this->hasOne(dichvu::class,'id','dichvu_id');
    }
    public function doanhnghiep(){
        return $this->hasOne(doanhnghiep::class,'id','doanhnghiep_id');
    }
}
