<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendedor;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendedor = new Vendedor();
        $vendedor->nombre = 'Willian Castro';
        $vendedor->telefono = '3123243433';
        $vendedor->dni = '234234343';
        $vendedor->codigo = 'Ven-33334';
        $vendedor->save();

        $vendedor2 = new Vendedor();
        $vendedor2->nombre = 'Ana Suarez';
        $vendedor2->telefono = '2342343434';
        $vendedor2->dni = '454444';
        $vendedor2->codigo = 'Ven-00089';
        $vendedor2->save();

        DB::table('vendedores')->insert(['nombre' => 'Marisol Fernandez', 'dni'=> '232312323', 'codigo' => 'VEN-00999']);
    }
}
