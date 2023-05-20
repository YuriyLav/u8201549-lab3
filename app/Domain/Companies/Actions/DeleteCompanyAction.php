<?php

namespace App\Domain\Companies\Actions;

use App\Domain\Companies\Models\Company;

class DeleteCompanyAction
{
    public function execute(int $id): void
    {
      Company::findOrFail($id);
    }
}