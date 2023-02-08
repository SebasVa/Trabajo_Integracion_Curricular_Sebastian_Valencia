<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 6) as $key)
        {
            Faq::create([
                'question' => '¿Hay opciones de actividades sociales o de networking disponibles durante la conferencia?',
                'answer' => 'La disponibilidad de opciones de actividades sociales o de networking durante la conferencia puede variar dependiendo del organizador y del lugar donde se realice el evento.'
            ]);
        }
    }
}
