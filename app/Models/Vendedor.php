<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendedor extends Model
{
    use HasFactory;
    protected $table = 'vendedores';
    protected $fillable = ['nombre', 'dni', 'codigo', 'empresa', 'telefono', 'email', 'direccion', 'estado'];

    public function propiedades(): HasMany {
        return $this->hasMany(Propiedad::class);
    }

}
