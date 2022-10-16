<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'correo', 'telefono', 'tipomascota', 'raza','comentario'];

    //protected $guarded = [];
    //public $timestamp = false;
}
