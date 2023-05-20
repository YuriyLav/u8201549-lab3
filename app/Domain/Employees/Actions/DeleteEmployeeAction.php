<?php

namespace App\Domain\Employees\Actions;

use App\Domain\Employees\Models\Employee;

class DeleteCompanyAction
{
    public function execute(int $id): void
    {
      Employee::findOrFail($id);
    }
}