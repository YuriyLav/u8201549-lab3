<?php

namespace Database\Factories;

use App\Domain\Companies\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
       
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
        ];
    }
}