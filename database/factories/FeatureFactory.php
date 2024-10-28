<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Feature;

class FeatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Feature::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'icon' => $this->faker->text(),
            'title' => '{}',
            'description' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
