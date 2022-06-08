<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    use HasFactory;

    protected $table = 'nhanvien';

    protected $fillable = [
        'nhanvien_id',
        'diachi',
        'sdt'
    ];

    public function user(){
        return $this->hasOne(User::class,'id','nhanvien_id');
    }
}
