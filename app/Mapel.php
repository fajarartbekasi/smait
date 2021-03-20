<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';
    protected $guarded = [];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

}
