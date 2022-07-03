<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    use HasFactory;

    protected $table = 'dichvu';

    protected $fillable = [
        'tendv',
        'thoigian',
        'gia',
        'khuyenmai_id'
    ];
    public function dangkydichvu(){
        return $this->hasMany(dangkydichvu::class,'dichvu_id','id');
    }
    public function khuyenmai(){
        return $this->hasOne(khuyenmai::class,'tgkhuyenmai','khuyenmai_id');
    }
}
