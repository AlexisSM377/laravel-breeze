<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         /* elimina todos los datos si es que la tabla tubiera datos  */
         
         /* inserta los estados */
         State::insert([
             ['nombre' => 'Aguascalientes'],
             ['nombre' => 'Baja California'],
             ['nombre' => 'Baja California Sur'],
             ['nombre' => 'Campeche'],
             ['nombre' => 'Coahuila'],
             ['nombre' => 'Colima'],
             ['nombre' => 'Chiapas'],
             ['nombre' => 'Chihuahua'],
             ['nombre' => 'Ciudad de México'],
             ['nombre' => 'Durango'],
             ['nombre' => 'Guanajuato'],
             ['nombre' => 'Guerrero'],
             ['nombre' => 'Hidalgo'],
             ['nombre' => 'Jalisco'],
             ['nombre' => 'Estado de México'],
             ['nombre' => 'Michoacán'],
             ['nombre' => 'Morelos'],
             ['nombre' => 'Nayarit'],
             ['nombre' => 'Nuevo León'],
             ['nombre' => 'Oaxaca'],
             ['nombre' => 'Puebla'],
             ['nombre' => 'Querétaro'],
             ['nombre' => 'Quintana Roo'],
             ['nombre' => 'San Luis Potosí'],
             ['nombre' => 'Sinaloa'],
             ['nombre' => 'Sonora'],
             ['nombre' => 'Tabasco'],
             ['nombre' => 'Tamaulipas'],
             ['nombre' => 'Tlaxcala'],
             ['nombre' => 'Veracruz'],
             ['nombre' => 'Yucatán'],
             ['nombre' => 'Zacatecas'],
         ]);
    }
}
