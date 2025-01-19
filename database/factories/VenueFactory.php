<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Conference;
use App\Models\Venue;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'status' => $this->faker->randomElement(["pending","active","cancelled"]),
            'region' => $this->faker->word(),
            'conference_id' => Conference::factory(),
        ];
    }
}
