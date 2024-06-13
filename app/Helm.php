<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helm extends Model
{
    protected $table = 'helm';

    protected $fillable =
        [
            'merk',
            'jenis',
            'type',
            'warna',
            'harga',
            'poster'
        ];
}
