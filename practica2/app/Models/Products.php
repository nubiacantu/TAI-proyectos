<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //use HasFactory;

    //los datos que se van a llenar an la bd
    protected $fillable = [
        'descripcion_corta',
        'descripcion_larga',
        'stock',
        'peso',
        'precio_venta',
        'precio_compra',
        
    ];
}
