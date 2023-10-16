<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Loaidetai extends Model
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    protected $primaryKey = 'maldt';
    protected $fillable = [
        'maldt',
        'tenldt',
    ];
    public function detai()
    {
        return $this->hasMany(Detai::class, 'maldt');
    }

    public function phieudexuat1()
    {
        return $this->hasMany(Phieudexuat::class, 'maldt');
    }
}
