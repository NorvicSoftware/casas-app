<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\Cliente;

class ClienteExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Cliente::select('nombre', 'telefono', 'email', 'direccion')->get();
    // }

    public function view(): View
    {
        return view('reportes.excel', [
            'clientes' => Cliente::where('ciudad', 'Lima')->get(),
        ]);
    }
}
