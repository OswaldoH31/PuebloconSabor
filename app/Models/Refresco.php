<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refresco extends Model
{
    use HasFactory;

    protected $fillable = [
        'Marca',
        'Cantidad',
        'Costo',
        'Imagen',
        'local_id',
    ];
}
