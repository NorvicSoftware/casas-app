<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $fillable = ['nombre', 'precio', 'tipo', 'ubicacion', 'superficie', 'descripcion', 'propietario_id', 'vendedor_id'];

    public function vendedor (): BelongsTo{
        return $this->belongsTo(Vendedor::class);
    }

    public function propietario (): BelongsTo{
        return $this->belongsTo(Propietario::class);
    }

    public function clientes() : BelongsToMany {
        return $this->belongsToMany(Cliente::class);
    }

    public function transacciones(): HasMany {
        return $this->hasMany(Transaccion::class);
    }


}
