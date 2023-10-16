<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Thoihan extends Model
{
    use HasFactory;
    protected $primaryKey = 'math';
    public $timestamps = false;


    protected $fillable = [
        'math',
        'ngaybddk' ,
        'ngayktdk' ,
        'ngaybddx',
        'ngayktdx',
    ];
    // protected $dates  = ['ngaybddk', 'ngayktdk','ngaybddx' ,'ngayktdx'];

    protected $dates = ['ngaybddk', 'another_date_field'];

    public function getCreatedAtAttribute($date)
    {
        
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d ');
        
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d ');
    }


    public function detaith()
    {
        return $this->hasMany(Detai::class, 'math');
    }
}
