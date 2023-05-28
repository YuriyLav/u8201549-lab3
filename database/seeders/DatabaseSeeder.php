<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Domain\Companies\Models\Company;
use App\Domain\Departments\Models\Department;
use App\Domain\Employees\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Company::factory()->count(100)->create();
        Department::factory()->count(100)->create();
        Employee::factory()->count(100)->create();
    }
}
