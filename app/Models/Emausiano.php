<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emausiano extends Model
{
    use HasFactory;

    protected $table = "emaus_datos_del_servidor";
    public $timestamps = false;

    protected $fillable = ['id','nro', 'nombres', 'apellidos', 'cedula', 'fecha_nacimiento', 'numero_telefono', 'direccion_habitacion', 'estado_civil', 'bautismo', 'comunion', 'confirmacion', 'matrimonio', 'sexo', 'nro_retiro', 'fecha_retiro', 'parroquia', 'pueblo_ciudad'];
}