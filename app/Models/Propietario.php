<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propietario extends Model
{
    use HasFactory;
    protected $table = 'propietarios';
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];

    public function propiedades(): HasMany {
        return $this->hasMany(Propiedad::class);
    }


}
