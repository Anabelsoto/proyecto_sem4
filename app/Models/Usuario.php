<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public $table = 'usuario';
    protected $primaryKey ='idusuario';
    public $timestamps = false;
}
