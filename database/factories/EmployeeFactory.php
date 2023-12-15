<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'firstName' => $this->faker->unique()->firstName,
            'lastName' => $this->faker->unique()->lastName,
            'position' => $this->faker->randomElement(['Crew Member','Cashier','Cook','Assistant Manager','Store Manager','Maintenance Technician','Drive-Thru Operator','Trainer','Marketing Coordinator']),
            'dateOfBirth' => $this->faker->dateTimeThisDecade,
            'hireDate' => $this->faker->dateTimeThisDecade,
        ];
    }
}
