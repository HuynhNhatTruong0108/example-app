<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguoidung extends Model
{
    use HasFactory;
    protected $fillable = [
        'mand',
        'tennd',
        'email',
        'sdt',
        'matkhau',
    ];
}
