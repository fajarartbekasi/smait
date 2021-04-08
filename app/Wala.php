<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wala extends Model
{
    protected $table = 'walas';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

}
