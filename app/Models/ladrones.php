<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ladrones extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'delito',
        'policia_id'
    ];
    public $timestamps = false;
    use HasFactory;
}
