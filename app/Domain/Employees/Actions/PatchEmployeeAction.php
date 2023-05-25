<?php

namespace App\Domain\Employees\Actions;

use App\Domain\Employees\Models\Employee;

class PatchEmployeeAction
{
    public function execute(int $id, array $fields): Employee
    {
        $emp = Employee::query()->findOrFail($id);
        $emp->update($fields);
        $emp->save();
        return $emp;
    }
}