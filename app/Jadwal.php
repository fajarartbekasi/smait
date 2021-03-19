<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';
    protected $fillable = [
        'jurusan_id','mapel_id','kela_id','jam','hari'
    ];

    protected $casts = [
        'mapel_id' => 'array',
    ];
    public function setAttriute($values)
    {
        $this->attributes['mapel_id'] = json_encode($value);
    }
}
