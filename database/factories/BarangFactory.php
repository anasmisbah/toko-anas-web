<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use App\Jenis;
use Faker\Generator as Faker;
use Illuminate\Support\Str as IlluminateStr;
use Psy\Util\Str;

$factory->define(Barang::class, function (Faker $faker) {
    return [
        'kode'=> IlluminateStr::random(10),
        'nama'=> $faker->name,
        'deskripsi'=>$faker->text(20),
        'harga_beli'=> random_int(1000,100000),
        'harga_jual'=> random_int(1000,100000),
        'stok'=> random_int(10,100),
        'foto'=> IlluminateStr::random(30),
        'jenis_id'=> function ()
        {
            return Jenis::all()->random();
        }
    ];
});
