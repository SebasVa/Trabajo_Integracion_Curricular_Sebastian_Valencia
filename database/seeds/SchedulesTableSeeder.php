<?php

use App\Schedule;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'day_number' => 1,
                'start_time' => '09:30:00',
                'title' => 'Registro',
                'subtitle' => 'El registro es el primer punto de contacto para los participantes, donde reciben su paquete de bienvenida y se registran para el evento.',
                'speaker_id' => null,
            ],
            [
                'day_number' => 1,
                'start_time' => '10:00:00',
                'title' => 'Apertura y bienvenida',
                'subtitle' => 'Una sesión de apertura suele ser el primer evento formal de la conferencia, en la que los organizadores y patrocinadores dan la bienvenida a los participantes y presentan una visión general del evento.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 1,
                'start_time' => '11:00:00',
                'title' => 'Sesiones plenarias',
                'subtitle' => 'Las sesiones plenarias son las presentaciones principales de la conferencia, en las que los oradores invitados comparten sus conocimientos y experiencias con los participantes.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 1,
                'start_time' => '12:00:00',
                'title' => 'Taller y sesiones paralelas',
                'subtitle' => 'Estas sesiones ofrecen a los participantes la oportunidad de profundizar en temas específicos y de interactuar con otros expertos en un entorno más pequeño y enfocado.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 1,
                'start_time' => '14:00:00',
                'title' => 'Pausas y networking',
                'subtitle' => 'Las pausas y las oportunidades de networking son momentos clave para que los participantes conozcan a otros asistentes, establezcan contactos y discutan temas relacionados con la conferencia.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 1,
                'start_time' => '15:00:00',
                'title' => 'Cena y eventos sociales',
                'subtitle' => 'Muchas conferencias incluyen una cena o eventos sociales en los que los participantes pueden relajarse y disfrutar de un ambiente más informal.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 1,
                'start_time' => '16:00:00',
                'title' => 'Clausura ',
                'subtitle' => 'La clausura es la última sesión formal de la conferencia, en la que los organizadores resumen los logros y las lecciones aprendidas, y agradecen a los participantes y patrocinadores.',
                'speaker_id' => 6,
            ],
            [
                'day_number' => 2,
                'start_time' => '09:30:00',
                'title' => 'Registro',
                'subtitle' => 'El registro es el primer punto de contacto para los participantes, donde reciben su paquete de bienvenida y se registran para el evento.',
                'speaker_id' => null,
            ],
            [
                'day_number' => 2,
                'start_time' => '10:00:00',
                'title' => 'Apertura y bienvenida',
                'subtitle' => 'Una sesión de apertura suele ser el primer evento formal de la conferencia, en la que los organizadores y patrocinadores dan la bienvenida a los participantes y presentan una visión general del evento.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 2,
                'start_time' => '11:00:00',
                'title' => 'Sesiones plenarias',
                'subtitle' => 'Las sesiones plenarias son las presentaciones principales de la conferencia, en las que los oradores invitados comparten sus conocimientos y experiencias con los participantes.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 2,
                'start_time' => '12:00:00',
                'title' => 'Taller y sesiones paralelas',
                'subtitle' => 'Estas sesiones ofrecen a los participantes la oportunidad de profundizar en temas específicos y de interactuar con otros expertos en un entorno más pequeño y enfocado.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 2,
                'start_time' => '14:00:00',
                'title' => 'Pausas y networking',
                'subtitle' => 'Las pausas y las oportunidades de networking son momentos clave para que los participantes conozcan a otros asistentes, establezcan contactos y discutan temas relacionados con la conferencia.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 2,
                'start_time' => '15:00:00',
                'title' => 'Cena y eventos sociales',
                'subtitle' => 'Muchas conferencias incluyen una cena o eventos sociales en los que los participantes pueden relajarse y disfrutar de un ambiente más informal.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 2,
                'start_time' => '16:00:00',
                'title' => 'Clausura ',
                'subtitle' => 'La clausura es la última sesión formal de la conferencia, en la que los organizadores resumen los logros y las lecciones aprendidas, y agradecen a los participantes y patrocinadores.',
                'speaker_id' => 6,
            ],
            [
                'day_number' => 3,
                'start_time' => '09:30:00',
                'title' => 'Registro',
                'subtitle' => 'El registro es el primer punto de contacto para los participantes, donde reciben su paquete de bienvenida y se registran para el evento.',
                'speaker_id' => null,
            ],
            [
                'day_number' => 3,
                'start_time' => '10:00:00',
                'title' => 'Apertura y bienvenida',
                'subtitle' => 'Una sesión de apertura suele ser el primer evento formal de la conferencia, en la que los organizadores y patrocinadores dan la bienvenida a los participantes y presentan una visión general del evento.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 3,
                'start_time' => '11:00:00',
                'title' => 'Sesiones plenarias',
                'subtitle' => 'Las sesiones plenarias son las presentaciones principales de la conferencia, en las que los oradores invitados comparten sus conocimientos y experiencias con los participantes.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 3,
                'start_time' => '12:00:00',
                'title' => 'Taller y sesiones paralelas',
                'subtitle' => 'Estas sesiones ofrecen a los participantes la oportunidad de profundizar en temas específicos y de interactuar con otros expertos en un entorno más pequeño y enfocado.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 3,
                'start_time' => '14:00:00',
                'title' => 'Pausas y networking',
                'subtitle' => 'Las pausas y las oportunidades de networking son momentos clave para que los participantes conozcan a otros asistentes, establezcan contactos y discutan temas relacionados con la conferencia.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 3,
                'start_time' => '15:00:00',
                'title' => 'Cena y eventos sociales',
                'subtitle' => 'Muchas conferencias incluyen una cena o eventos sociales en los que los participantes pueden relajarse y disfrutar de un ambiente más informal.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 3,
                'start_time' => '16:00:00',
                'title' => 'Clausura ',
                'subtitle' => 'La clausura es la última sesión formal de la conferencia, en la que los organizadores resumen los logros y las lecciones aprendidas, y agradecen a los participantes y patrocinadores.',
                'speaker_id' => 6,
            ],

        ];

        foreach($schedules as $schedule)
        {
            Schedule::create($schedule);
        }
    }
}
