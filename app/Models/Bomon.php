<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bomon extends Model
{
    
    protected $primaryKey= 'mabm';
    use HasFactory;
    protected $fillable = [
        'mabm',
        'tenbm',
     
    ];


    public function giangvien()
    {
        return $this->hasOne(Giangvien::class, 'mabm');
    }
}
