<?php

namespace App\Domain\Departments\Actions;

use App\Domain\Departments\Models\Department;

class DeleteDepartmentAction
{
    public function execute(int $id): void
    {
      Department::findOrFail($id);
    }
}