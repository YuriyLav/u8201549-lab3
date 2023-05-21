<?php

namespace App\Http\ApiV1\Modules\Books\Controllers;

use App\Domain\Companies\Models\Company;
use App\Domain\Companies\Actions\CreateCompanyAction;
use App\Domain\Companies\Actions\DeleteCompanyAction;
use App\Domain\Companies\Actions\PatchCompanyAction;
use App\Domain\Companies\Actions\ReplaceCompanyAction;
use App\Http\ApiV1\Modules\Companies\Requests\AddCompanyRequest;
use App\Http\ApiV1\Modules\Companies\Requests\PatchCompanyRequest;
use App\Http\ApiV1\Modules\Companies\Requests\ReplaceCompanyRequest;
use App\Http\ApiV1\Modules\Companies\Resources\CompanyResource;
use App\Http\ApiV1\Modules\Support\Resources\EmptyResource;

class CompanyController
{
    public function create(AddCompanyRequest $request, CreateCompanyAction $action): CompanyResource
    {
        return new CompanyResource($action->execute($request->validated()));
    }
    public function replace(int $id, ReplaceCompanyRequest $request, ReplaceCompanyAction $action): CompanyResource
    {
        return new CompanyResource($action->execute($id, $request->validated()));
    }
    public function patch(int $id, PatchCompanyRequest $request, PatchCompanyAction $action): CompanyResource
    {
        return new CompanyResource($action->execute($id, $request->validated()));
    }
    public function delete(int $id, DeleteCompanyAction $action): EmptyResource
    {
        $action->execute($id);
        return new EmptyResource();
    }
    public function getCar(int $id): CompanyResource
    {
        return new CompanyResource(Company::findOrFail($id));
    }
}