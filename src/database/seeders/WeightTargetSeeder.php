<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WeightTarget;

class WeightTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        WeightTarget::factory()->create([
            'user_id' => $user->id,
            'target_weight' => 65.0,
        ]);
    }
}
