<?php

use App\Amenity;
use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = [
            [
                'name' => '
                Asientos regulares'
            ],
            [
                'name' => 'Descanso'
            ],
            [
                'name' => 'Insignia personalizada'
            ],
            [
                'name' => '
                Acceso a la comunidad'
            ],
            [
                'name' => '
                Acceso al taller'
            ],
            [
                'name' => '
                Después de la fiesta'
            ],
        ];

        foreach($amenities as $amenity)
        {
            Amenity::create($amenity);
        }
    }
}
