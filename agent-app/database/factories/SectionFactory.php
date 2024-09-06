<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
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
            'description'=>'Section par defaut',
            'date_creation'=>fake()->dateTimeBetween($startDate='-10 years' ,$endDate='now', $timezone=null),
            'statut'=>'fonctionnel',
            'date_fermeture'=>null,
            'longitude'=>null,
            'latitude'=>null,
            'departement_id'=>1,
            'user_id'=>1
        ];
    }
}
