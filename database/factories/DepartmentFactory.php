<?php

namespace Database\Factories;

use App\Domain\Departments\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition(): array
    {
        
        return [
            'name' => $this->faker->jobTitle,
            'company_id' => mt_rand(1, 100)
        ];
    }
}