<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PageTravels;

class PageTravelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PageTravels::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'header_heading' => '{}',
            'heading' => '{}',
            'banner' => $this->faker->text(),
        ];
    }
}
