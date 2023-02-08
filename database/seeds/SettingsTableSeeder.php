<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key'   => 'title',
                'value' => 'Conferencias<br><span>Anuales</span> De Marketing'
            ],
            [
                'key'   => 'subtitle',
                'value' => '10-12 Diciembre, Cd Bicentenario'
            ],
            [
                'key'   => 'youtube_link',
                'value' => 'https://www.youtube.com/watch?v=A7icLdQmkvk'
            ],
            [
                'key'   => 'about_description',
                'value' => 'Está ubicado en un sector con un clima privilegiado. Tres rutas de acceso de primer orden. Cerca de centros escolares. Cuenta con líneas de buses y todos los servicios básicos. Estructura de hormigón, sismorresistente.'
            ],
            [
                'key'   => 'about_where',
                'value' => 'Cd Bicentenario'
            ],
            [
                'key'   => 'about_when',
                'value' => 'Lunes a Miércoles<br>10-12 Diciembre'
            ],
            [
                'key'   => 'about_description_2',
                'value' => 'Está ubicado en un sector con un clima privilegiado. Tres rutas de acceso de primer orden. Cerca de centros escolares. Cuenta con líneas de buses y todos los servicios básicos. Estructura de hormigón, sismorresistente.'
            ],
            [
                'key'   => 'about_where_2',
                'value' => 'Cd Bicentenario'
            ],
            [
                'key'   => 'about_when_2',
                'value' => 'Lunes a Miércoles<br>10-12 Diciembre'
            ],
            [
                'key'   => 'about_description_3',
                'value' => 'Está ubicado en un sector con un clima privilegiado. Tres rutas de acceso de primer orden. Cerca de centros escolares. Cuenta con líneas de buses y todos los servicios básicos. Estructura de hormigón, sismorresistente.'
            ],
            [
                'key'   => 'about_where_3',
                'value' => 'Cd Bicentenario'
            ],
            [
                'key'   => 'about_when_3',
                'value' => 'Lunes a Miércoles<br>10-12 Diciembre'
            ],
            [
                'key'   => 'contact_address',
                'value' => 'N18-237, 15 de Julio, Quito 170204'
            ],
            [
                'key'   => 'contact_phone',
                'value' => '0997562240'
            ],
            [
                'key'   => 'contact_email',
                'value' => 'Nosotros@gmail.com'
            ],
            [
                'key'   => 'footer_description',
                'value' => 'Este sistema web de gestión de conferencias es una aplicación en línea diseñada para ayudar a los organizadores de conferencias a administrar y coordinar todos los aspectos relacionados con un evento. Este tipo de sistema incluye funcionalidades como la gestión de ubicaciones de eventos, la gestión de pagos, la gestión de horarios, la gestión de conferencistas.'
            ],
            [
                'key'   => 'footer_address',
                'value' => 'N18-237 <br> 15 de Julio,<br> Quito 170204'
            ],
            [
                'key'   => 'footer_twitter',
                'value' => 'https://twitter.com/'
            ],
            [
                'key'   => 'footer_facebook',
                'value' => 'https://www.facebook.com/'
            ],
            [
                'key'   => 'footer_instagram',
                'value' => 'https://www.instagram.com/'
            ],
            [
                'key'   => 'footer_linkedin',
                'value' => 'https://www.linkedin.com/'
            ],
        ];

        foreach($settings as $setting)
        {
            Setting::create($setting);
        }
    }
}