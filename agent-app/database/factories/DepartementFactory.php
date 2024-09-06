<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libele'=>'General',
            'description'=>'Departement par defaut',
            // 'date_creation'=>fake()->date($format ='Y-m-d' ,$max='now'),
            'date_creation'=>fake()->dateTimeBetween($startDate='-10 years' ,$endDate='now', $timezone=null),
            'statut'=>'fonctionnel',
            'date_fermeture'=>null,
            'longitude'=>null,
            'latitude'=>null,
            'user_id'=>1
        ];
    }
}
