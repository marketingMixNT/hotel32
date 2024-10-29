<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Home;

class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'meta_title' => '{}',
            'meta_desc' => '{}',
            'title' => '{}',
            'logo' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'phone_second' => $this->faker->text(),
            'phone_third' => $this->faker->text(),
            'mail' => $this->faker->text(),
            'city' => $this->faker->city(),
            'address' => $this->faker->text(),
            'bank' => $this->faker->text(),
            'bank_account' => $this->faker->text(),
            'booking_link' => '{}',
            'booking_script' => $this->faker->text(),
            'map' => $this->faker->text(),
            'map_link' => $this->faker->text(),
            'slider_title' => '{}',
            'slider_subtitle' => '{}',
            'slider_images' => $this->faker->text(),
            'rooms_heading' => '{}',
            'rooms_text' => '{}',
            'about_text_first' => '{}',
            'about_image_first' => $this->faker->text(),
            'about_text_second' => '{}',
            'about_image_second' => $this->faker->text(),
            'restaurant_text_first' => '{}',
            'restaurant_image_first' => $this->faker->text(),
            'restaurant_text_second' => '{}',
            'restaurant_image_second' => $this->faker->text(),
            'testimonials_heading' => '{}',
            'testimonials_text' => '{}',
            'google_reviews' => $this->faker->text(),
            'google_reviews_average' => $this->faker->text(),
            'google_reviews_link' => $this->faker->text(),
            'tripadvisor_reviews' => $this->faker->text(),
            'tripadvisor_reviews_average' => $this->faker->text(),
            'tripadvisor_reviews_link' => $this->faker->text(),
            'travel_heading' => '{}',
            'travel_text' => '{}',
            'travel_images' => $this->faker->text(),
        ];
    }
}
