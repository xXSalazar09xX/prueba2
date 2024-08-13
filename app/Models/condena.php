<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condena extends Model
{
    protected $fillable = [
        'ladron_id',
        'annos_condena',
        'multa_economica',
    ];
    public $timestamps = false;
    use HasFactory;
}
