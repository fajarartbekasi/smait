<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kela extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['nama','user_id', 'keahlian'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

}
