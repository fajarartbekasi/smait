<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['user_id'];

    public function absensis()
    {
        return $this->belongsTo(Absensi::class);
    }
    public function kela()
    {
       return $this->belongsTo(Kela::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
