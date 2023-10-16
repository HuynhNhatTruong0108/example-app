<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Kyslik\ColumnSortable\Sortable;
class Detai extends Model
{
    
    use HasFactory;
    // public $timestamps = false;

    // protected $dateFormat = 'U';
    public $timestamps = true;

    public $incrementing = false;
    protected $primaryKey = 'madt';
    protected $dates  = ['created_at', 'updated_at'];

    protected $fillable = [
        'madt',
        'tendt',
        'madx',
        'user_id',
        'maldt',
        'namhoc',
        'trangthai',
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'math'
    ];


    protected $casts = [
        'updated_at' => 'datetime',
    ];


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
            $lastRecord = static::latest('madt')->first();
            if ($lastRecord) {
                $lastCustomId = $lastRecord->madt;
                $nextCustomId = $lastCustomId + 1;
                $model->madt = $nextCustomId;
            } else {
                $model->madt = 2023001; // Giá trị khởi tạo ban đầu
            }
        });
    }


    //tim kiem
  

    public function scopeSearch($query)
    {
        if ($tendt = request()->tendt) {
            $query = $query->where('tendt', 'like', '%' . $tendt . '%');
        }
        return $query;
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

    public function scopeSearch2($query)
    {
        if ($namhoc = request()->namhoc) {
            $query = $query->where('namhoc', 'like', '%' . $namhoc . '%');
        }
        return $query;
    
    }

    public function DKy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



    public function dexuat()
    {
        return $this->belongsTo(Phieudexuat::class, 'madx');
    }

    public function loaidetai()
    {
        return $this->belongsTo(Loaidetai::class, 'maldt');
    }

    public function thoihan()
    {
        return $this->belongsTo(Thoihan::class, 'math');
    }
    
}
