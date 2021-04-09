<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Predikat extends Model
{
    protected $table = 'predikats';
    protected $guarded = [];

    public function mapel()
    {
       return $this->belongsTo(Mapel::class);
    }
    public function guru()
    {
       return $this->belongsTo(Mapel::class);
    }
}
