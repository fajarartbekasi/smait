<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function walas()
    {
        return $this->hasMany(Wala::class);
    }
    public function absensis()
    {
        return $this->hasMany(Absensi::class);
    }
}
