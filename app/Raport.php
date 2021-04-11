<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    protected $table = 'raports';
    protected $fillable = [
        'user_id','kela_id','guru_id','mapel_id',
        'p_nilai','p_predikat','p_deskripsi','k_nilai',
        'k_nilai','k_predikat','k_deskripsi',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kela()
    {
        return $this->belongsTo(Kela::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
