<?php

namespace Database\Factories;

use App\Models\WeightTarget;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WeightTargetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = WeightTarget::class;

    public function definition()
    {
        return [
            'id' => (string) Str::uuid(),
            'target_weight' => $this->faker->randomFloat(1, 40, 100),
        ];
    }
}
