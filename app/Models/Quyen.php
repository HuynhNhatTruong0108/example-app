<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quyen extends Model
{
    protected $primaryKey= 'maquyen';
    use HasFactory;
    protected $fillable = [
        'maquyen',
        'tenquyen',
    ];
}
