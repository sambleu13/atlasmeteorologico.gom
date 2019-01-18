<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    public $table = 'productos';
    protected $fillable = ['codigo','nombre','descripcion','activo','image','path'];
}
