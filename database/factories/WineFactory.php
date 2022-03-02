<?php

namespace Database\Factories;

Use App\Models\Wine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wine>
 */
class WineFactory extends Factory
{
    protected $model = Wine::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(20),
            'vingate' => random_int(1969,2022), 
            'cellar' => $this->faker->name(20),
            'id_origin' => random_int(1,10),
            'id_country' => random_int(1,10),
            'id_category' => random_int(1,10),
        ];
    }
}
