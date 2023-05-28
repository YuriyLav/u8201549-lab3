<?php

namespace App\Domain\Departments\Actions;

use App\Domain\Departments\Models\Department;

class CreateDepartmentAction
{
    public function execute(array $fields): Department
    {
      $dep = Department::create($fields);

      return $dep;   
    }
}