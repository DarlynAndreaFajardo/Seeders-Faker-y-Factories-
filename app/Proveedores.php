<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table='proveedores';
    protected $fillable=[
        'id', 'nombre' , 'email', 'celular','ciudad'

    ];
    protected $primaryKey='id';
}
