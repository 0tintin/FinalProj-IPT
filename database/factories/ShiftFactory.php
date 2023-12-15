<?php

namespace Database\Factories;
use App\Models\Shift;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shift>
 */
class ShiftFactory extends Factory
{
    protected $model = Shift::class;

    public function definition()
    {
        return [
            'employee_id' => rand(1, 10), 
            'startTime' => $this->faker->time,
            'endTime' => $this->faker->time,
            'date' => $this->faker->dateTimeThisYear,
            'breaksTaken' => $this->faker->numberBetween(0, 2),
        ];
    }
}
