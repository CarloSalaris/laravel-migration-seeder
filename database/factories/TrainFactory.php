<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{

    public function definition()
    {
        return [
            'azienda' => fake() -> randomElement(['Trenitalia', 'Italo', 'Frecciarossa', 'Frecciabianca', 'frecciaccia']),
            'stazione_partenza' => fake() -> city(),
            'stazione_arrivo' => fake() -> city(),
            'orario_partenza' => fake() -> time(),
            'orario_arrivo' => fake() -> time(),
            'codice' => fake() -> unique() -> numerify('##########'),
            'numero_carrozze' => fake() -> numberBetween(1, 20),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}
