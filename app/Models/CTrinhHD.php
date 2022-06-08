<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTrinhHD extends Model
{
    use HasFactory;

    protected $table = 'ctrinhhd';

    protected $fillable = [
        'thang',
        'tenchuongtrinh',
        'kehoach',
        'titrong',
        'thuchien',
    ];
}
