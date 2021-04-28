<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table   = 'absensis';
    protected $fillable = [
        'siswa_id','guru_id','kela_id','wala_id','absen'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
