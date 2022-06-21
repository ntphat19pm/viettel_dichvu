<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khuyenmai extends Model
{
    use HasFactory;

    protected $table = 'khuyenmai';

    protected $fillable = [
        'tenkhuyenmai',
        'tgkhuyenmai',
    ];

    public function dichvu(){
        return $this->hasMany(dichvu::class,'khuyenmai','id');
    }
}
