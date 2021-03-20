<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';
    protected $guarded = [];

    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
