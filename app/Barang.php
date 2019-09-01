<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";

    public function jenis()
    {
        return $this->belongsTo('App\Jenis', 'jenis_id', 'id');
    }
}
