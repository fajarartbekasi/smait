<?php

namespace App;

use App\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
    public function gurus()
    {
        return $this->hasMany(Guru::class);
    }
    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
    public function walas()
    {
        return $this->hasMany(Wala::class);
    }
    public function kelas()
    {
        return $this->hasMany(Kela::class);
    }
    public function ulangans()
    {
        return $this->hasMany(Ulangan::class);
    }

}
