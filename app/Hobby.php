<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $table = "hobbies";

    public function datasiswa()
    {
        return $this->belongsTo('App\DataSiswa');
    }
}
