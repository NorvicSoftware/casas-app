<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::call(function(){
    DB::table('clientes')->where('ciudad', '=', null)->update(['ciudad' => 'Bogota']);
})->daily()->at('21:44');


Schedule::call(function(){
    DB::table('clientes')->where('estado', '=', 'Inactivo')->update(['ciudad' => 'Caracas']);
})->daily()->at('21:45');


