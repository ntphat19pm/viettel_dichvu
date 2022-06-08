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
        'khuyenmai'
    ];
    public function dangkydichvu(){
        return $this->hasMany(dangkydichvu::class,'dichvu_id','id');
    }
}
