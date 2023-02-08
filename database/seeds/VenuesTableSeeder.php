<?php

use App\Venue;
use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venue = Venue::create([
            'name'          => 'Cd Bicentenario',
            'address'       => 'N18-237, 15 de Julio, Quito 170204',
            'latitude'      => '-0.0634395',
            'longitude'     => '-78.4517485',
            'description'   =>  'Está ubicado en un sector con un clima privilegiado. Tres rutas de acceso de primer orden. Cerca de centros escolares.  Cuenta con líneas de buses y todos los servicios básicos. Estructura de hormigón, sismorresistente.'
        ]);
    }
}
