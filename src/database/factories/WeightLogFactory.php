<?php

namespace Database\Factories;

use App\Models\WeightLog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class WeightLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightLog::class;

    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-35 days', 'now')->format('Y-m-d');
        return [
            'id' => (string) Str::uuid(),
            'weight' => $this->faker->randomFloat(1, 40, 100),
            'calories' => $this->faker->numberBetween(1500, 3000),
            'exercise_time' => $this->faker->numberBetween(10, 180),
            'exercise_content' => $this->faker->realText(50),
        ];
    }
}
