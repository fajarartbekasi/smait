<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kela extends Model
{
    protected $table = 'kelas';
    protected $guarded = [];

    public function wala()
    {
        return $this->belongsTo(Wala::class);
    }
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }
}
