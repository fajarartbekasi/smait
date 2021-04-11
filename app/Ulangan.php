<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulangan extends Model
{
    protected $table = 'ulangans';
    protected $fillable = [
        'user_id','kela_id','guru_id','mapel_id',
        'ulh_1','ulh_2','ulh_3','uas','uts'
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
