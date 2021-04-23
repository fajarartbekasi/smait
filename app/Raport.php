<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    protected $table = 'raports';
    protected $guarded = [];

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
