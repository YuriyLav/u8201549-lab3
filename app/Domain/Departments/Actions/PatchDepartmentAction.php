<?php

namespace App\Domain\Departments\Actions;

use App\Domain\Departments\Models\Department;

class PatchDepartmentAction
{
    public function execute(int $id, array $fields): Department
    {
        $dep = Department::query()->findOrFail($id);
        $dep->update($fields);
        $dep->save();
        return $dep;
    }
}