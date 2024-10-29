<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PageAbout;
use App\Models\PageAboutBlock;

class PageAboutBlockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PageAboutBlock::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->text(),
            'text' => '{}',
            'sort' => $this->faker->numberBetween(-10000, 10000),
            'page_about_id' => PageAbout::factory(),
        ];
    }
}
