<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $table = 'transacciones';
    protected $fillable = ['tipo', 'fecha', 'costo', 'numero', 'propiedad_id', 'cliente_id'];
}
