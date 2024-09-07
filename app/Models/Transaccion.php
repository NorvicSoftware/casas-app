<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaccion extends Model
{
    use HasFactory;
    protected $table = 'transacciones';
    protected $fillable = ['tipo', 'fecha', 'costo', 'numero', 'propiedad_id', 'cliente_id'];

    public function propiedad (): BelongsTo{
        return $this->belongsTo(Propiedad::class);
    }

    public function cliente (): BelongsTo{
        return $this->belongsTo(Cliente::class);
    }
}
