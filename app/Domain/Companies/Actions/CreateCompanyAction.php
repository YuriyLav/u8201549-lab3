<?php

namespace App\Domain\Companies\Actions;

use App\Domain\Companies\Models\Company;

class CreateCompanyAction
{
    public function execute(array $fields): Company
    {
      $company = Company::create($fields);

      return $company;   
    }
}