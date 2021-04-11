<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sikap extends Model
{
    protected $table = 'sikaps';
    protected $fillable = [
        'user_id','kela_id','guru_id','mapel_id',
        'sikap_1','sikap_2','sikap_3'
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
