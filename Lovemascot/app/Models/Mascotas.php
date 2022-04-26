<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    protected $fillable = ['cartilla', 'nombre', 'raza', 'color', 'edad', 'sexo',];
}
