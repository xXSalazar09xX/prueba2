<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policias extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'rango',
    ];
    public $timestamps = false;
    use HasFactory;
}
