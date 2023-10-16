<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'masv';
    protected $fillable = [
        'masv',
        'tensv',
        'lop',
        'gioitinh',
        'ngaysinh',
        'email',
        'sdt',
        'updated_at',
        'created_at'
    ];

    public function scopeSearch($query)
    {
        if($tensv=request()->tensv){
            $query = $query->where('tensv','like','%'.$tensv.'%');    
        }  
        return $query;
    }

    
    public function User_masv()
    {
        return $this->belongsTo(User::class, 'masv');
    }
}   
