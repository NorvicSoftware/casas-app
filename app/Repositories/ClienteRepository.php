<?php

namespace App\Repositories;

use App\Models\Cliente;

class ClienteRepository {
    public function getClientes()
    {
        return Cliente::get();
    }
}