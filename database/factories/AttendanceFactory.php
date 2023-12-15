<?php

namespace Database\Factories;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition()
    {
        return [
            'employee_id' => rand(1, 10),
            'shift_id' => rand(1, 10),
            'AttendanceStatus' => $this->faker->randomElement(['Present', 'Absent']),
            'AttendanceDate' => $this->faker->dateTimeThisYear,
            'Notes' => 'Custom notes for this attendance entry.',
        ];
        
        
    }
}
