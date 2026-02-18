<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('hipodromos')->insert([
            ['nombre' => 'La Rinconada', 'pais' => 'Venezuela', 'ciudad' => 'Caracas'],
            ['nombre' => 'Gulfstream Park', 'pais' => 'USA', 'ciudad' => 'Hallandale Beach'],
            ['nombre' => 'Santa Anita', 'pais' => 'USA', 'ciudad' => 'Arcadia']
        ]);

        DB::table('reuniones')->insert([
            ['hipodromo_id' => 1, 'fecha' => '2026-02-08', 'variant' => 0.0],
            ['hipodromo_id' => 1, 'fecha' => '2026-02-15', 'variant' => 0.0],
            ['hipodromo_id' => 2, 'fecha' => '2026-02-10', 'variant' => 0.0]
        ]);

        DB::table('reuniones')->insert([
            ['hipodromo_id' => 1, 'fecha' => '2026-02-08', 'variant' => 0.0],
            ['hipodromo_id' => 1, 'fecha' => '2026-02-15', 'variant' => 0.0],
            ['hipodromo_id' => 2, 'fecha' => '2026-02-10', 'variant' => 0.0]
        ]);

        DB::table('carreras')->insert([
            ['reunion_id' => 1, 'numero' => 1, 'distancia_metros' => 1200, 'superficie' => 'dirt', 'condicion_pista' => 'fast', 'tiempo_base' => 72.0],
            ['reunion_id' => 1, 'numero' => 2, 'distancia_metros' => 1400, 'superficie' => 'dirt', 'condicion_pista' => 'fast', 'tiempo_base' => 84.0],
            ['reunion_id' => 2, 'numero' => 1, 'distancia_metros' => 1100, 'superficie' => 'dirt', 'condicion_pista' => 'fast', 'tiempo_base' => 66.0]
        ]);

        DB::table('ejemplares')->insert([
            ['nombre' => 'Tormenta Roja', 'sexo' => 'M', 'fecha_nacimiento' => '2018-05-12'],
            ['nombre' => 'Viento Azul', 'sexo' => 'H', 'fecha_nacimiento' => '2019-03-20'],
            ['nombre' => 'Luz de Sol', 'sexo' => 'H', 'fecha_nacimiento' => '2017-11-15']
        ]);

        DB::table('jinetes')->insert([
            ['nombre' => 'J. Lugo', 'porcentaje_victorias' => 18.5],
            ['nombre' => 'F. Quevedo', 'porcentaje_victorias' => 15.2],
            ['nombre' => 'Y. González', 'porcentaje_victorias' => 12.8]
        ]);

        DB::table('entrenadores')->insert([
            ['nombre' => 'Carlos Radelli', 'porcentaje_victorias' => 22.3],
            ['nombre' => 'Fernando Parilli', 'porcentaje_victorias' => 19.0]
        ]);


        DB::table('participaciones')->insert([
            [
                'carrera_id' => 1, 'ejemplar_id' => 1, 'jinete_id' => 1, 'entrenador_id' => 1,
                'peso_asignado' => 56, 'descargo' => 0, 'peso_final' => 56,
                'tiempo_real' => 71.8, 'posicion' => 1, 'speed_rating' => null
            ],
            [
                'carrera_id' => 1, 'ejemplar_id' => 2, 'jinete_id' => 2, 'entrenador_id' => 2,
                'peso_asignado' => 55, 'descargo' => 0, 'peso_final' => 55,
                'tiempo_real' => 72.5, 'posicion' => 2, 'speed_rating' => null
            ],
            [
                'carrera_id' => 2, 'ejemplar_id' => 3, 'jinete_id' => 3, 'entrenador_id' => 1,
                'peso_asignado' => 54, 'descargo' => 0, 'peso_final' => 54,
                'tiempo_real' => 83.6, 'posicion' => 1, 'speed_rating' => null
            ]
        ]);
    }
}
