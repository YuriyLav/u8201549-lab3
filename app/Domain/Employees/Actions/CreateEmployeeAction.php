<?php

namespace App\Domain\Employees\Actions;

use App\Domain\Employees\Models\Employee;

class CreateEmployeeAction
{
    public function execute(array $fields): Employee
    {
      $emp = Employee::create($fields);

      return $emp;   
    }
}