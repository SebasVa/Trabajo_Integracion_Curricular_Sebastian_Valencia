<?php

use App\Price;
use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'name'  => '
                Acceso estándar',
                'price' => 15
            ],
            [
                'name'  => '
                Acceso Pro',
                'price' => 25
            ],
            [
                'name'  => '
                Acceso Prémium',
                'price' => 35
            ],
        ];

        foreach($prices as $price)
        {
            Price::create($price);
        }
    }
}
