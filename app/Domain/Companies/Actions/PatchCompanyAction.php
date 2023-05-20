<?php

namespace App\Domain\Companies\Actions;

use App\Domain\Companies\Models\Company;

class PatchCompanyAction
{
    public function execute(int $id, array $fields): Company
    {
        $comp = Company::query()->findOrFail($id);
        $comp->update($fields);
        $comp->save();
        return $comp;
    }
}