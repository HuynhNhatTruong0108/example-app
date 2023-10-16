<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huongdan extends Model
{
    use HasFactory;
    protected $fillable = [
        'magv',
        'masv',
        'nienkhoa',
        'ngaybd',
        'ngaykt',
        'madt',
    ];
}
