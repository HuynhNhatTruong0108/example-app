<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    public $timestamps = true;
    use HasFactory;
    protected $primaryKey = 'magv';
    protected $fillable = [
        'magv',
        'tengv',
        'mabm',
        'khoa',
        'sdt',
        'email',
        'maquyen',
        //7
    ];

    public function scopeSearch($query)
    {
        if($tengv=request()->madx){
            $query = $query->where('tengv','like','%'.$tengv.'%');    
        }  
        return $query;
    }

 

    public function Dx_gv()
    {
        return $this->hasOne(Phieudexuat::class, 'magv');
    }

    


    public function bomon()
    {
        return $this->belongsTo(Bomon::class, 'mabm');
    }

    public function Usergv()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

