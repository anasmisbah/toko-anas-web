<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis";

    protected $fillable = ['nama','deskripsi'];

    public function barang()
    {
        return $this->hasMany('App\Barang', 'jenis_id', 'id');
    }
}
