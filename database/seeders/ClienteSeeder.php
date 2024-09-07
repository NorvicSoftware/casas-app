<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente = new Cliente();
        $cliente->nombre = 'Karen Rojas';
        $cliente->telefono = '3534534545';
        $cliente->email = 'karen@gmail.com';
        $cliente->direccion = 'AV. Lirios';
        $cliente->save();

        $cliente2 = new Cliente();
        $cliente2->nombre = 'Juan Miguel';
        $cliente2->telefono = '2323123123123';
        $cliente2->email = 'juan@gmail.com';
        $cliente2->direccion = 'AV. Lirios';
        $cliente2->save();

        $cliente3 = new Cliente();
        $cliente3->nombre = 'Alex Medrano';
        $cliente3->save();
    }
}
