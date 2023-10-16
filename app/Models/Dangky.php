<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dangky extends Model
{
    protected $primaryKey= 'madk';
    use HasFactory;
    protected $fillable = [
        'ngaydk',
        'masv',
        'madt',
     
    ];
}
