<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $table = 'venta';
    protected $primaryKey ='idventa';
    public $timestamps = false;
}
