<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];

    public function propiedades() : BelongsToMany {
        return $this->belongsToMany(Propiedad::class);
    }

    public function transacciones (): HasMany {
        return $this->hasMany(Transaccion::class);
    }

}
