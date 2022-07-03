<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doanhnghiep extends Model
{
    use HasFactory;

    protected $table = 'doanhnghiep';

    protected $fillable = [
        'mst',
        'matruong',
        'tendoanhnghiep',
        'diachi',
        'sdt',
        'coquan',
        'huyen',
        'caphoc',
        'loaihinh',
        'nguoidaidien'
    ];

    public function doanhnghiep(){
        return $this->hasMany(doanhnghiep::class,'doanhnghiep_id','id');
    }
    public function scopeSearch($query)
    {
        if($tukhoa=request()->tukhoa){
            $query=$query->where('tendoanhnghiep','like','%'.$tukhoa.'%');
        }
        return $query;
    }
}
