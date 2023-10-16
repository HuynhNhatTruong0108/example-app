<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = true;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'quyen',
        'password',
        'created_at' ,
        'updated_at'  ,
    ];

    

    
    // public function date($date)
    // {
    //     $date->created_at->format('Y-m-d');
    // }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function DKy()
    {
        return $this->hasOne(Detai::class, 'user_id');
    }

    public function Giangvien()
    {
        return $this->hasMany(Giangvien::class, 'magv');
    }

    public function User_masv()
    {
        return $this->hasOne(Sinhvien::class, 'masv');
    }


    public function User_phieudexuat()
    {
        return $this->hasOne(Phieudexuat::class, 'magv');
    }

    public function User_phieudexuat1()
    {
        return $this->belongsTo(Phieudexuat::class, 'magv');
    }


    public function scopeSearch($query)
    {
        if($id=request()->id){
            $query = $query->where('id','like','%'.$id.'%');    
        }  
        return $query;
    }

    public function scopeSearch1($query)
    {
        if($name=request()->name){
            $query = $query->where('name','like','%'.$name.'%');    
        }  
        return $query;
    }

}

