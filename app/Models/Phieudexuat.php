<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Phieudexuat extends Model
{
    protected $primaryKey = 'madx';
    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'magv',
        'ngayduyet',
        'ngaydexuat',
        'muctieu',
        'yeucau',
        'tailieutk',
        'noidungkhac',
        'tinhtrang',
        'created_at',
        'updated_at',
        'maldt',
        'namhoc'
    ];
    public function scopeSearch($query)
    {
        if($madx=request()->madx){
            $query = $query->where('madx','like','%'.$madx.'%');    
        }  
        return $query;
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d ');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d ');
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastRecord = static::latest('madx')->first();
            if ($lastRecord) {
                $lastCustomId = $lastRecord->madx;
                $nextCustomId = $lastCustomId + 1;
                $model->madx = $nextCustomId;
            } else {
                $model->madx = 2023001; // Giá trị khởi tạo ban đầu
            }
        });
    }

    public function dexuat()
    {
        return $this->hasOne(Detai::class, 'madx');
    }
    

    public function Dx_gv()
    {
        return $this->belongsTo(Giangvien::class, 'magv');
    }


    public function User_phieudexuat()
    {
        return $this->belongsTo(User::class, 'magv');
    }

    public function User_phieudexuat1()
    {
        return $this->hasOne(User::class, 'magv');
    }

    public function loaidetai1()
    {
        return $this->belongsTo(Loaidetai::class, 'maldt');
    }


    public function scopeSearch1($query)
    {
        if ($maldt = request()->maldt ) {
            $query = $query->where('maldt', 'like', '%' . $maldt . '%');
        }
        if ($namhoc = request()->namhoc) {
            $query = $query->where('namhoc', 'like', '%' . $namhoc . '%');
        }
        return $query;
    
    }
}
