<?php

namespace App\Http\ApiV1\Modules\Employees\Controllers;

use App\Domain\Employees\Models\Employee;
use App\Domain\Employees\Actions\CreateEmployeeAction;
use App\Domain\Employees\Actions\DeleteEmployeeAction;
use App\Domain\Employees\Actions\PatchEmployeeAction;
use App\Domain\Employees\Actions\ReplaceEmployeeAction;
use App\Http\ApiV1\Modules\Employees\Requests\AddEmployeeRequest;
use App\Http\ApiV1\Modules\Employees\Requests\PatchEmployeeRequest;
use App\Http\ApiV1\Modules\Employees\Requests\ReplaceEmployeeRequest;
use App\Http\ApiV1\Modules\Employees\Resources\EmployeeResource;
use App\Http\ApiV1\Modules\Support\Resources\EmptyResource;

class EmployeeController
{
    public function create(AddEmployeeRequest $request, CreateEmployeeAction $action): EmployeeResource
    {
        return new EmployeeResource($action->execute($request->validated()));
    }
    public function replace(int $id, ReplaceEmployeeRequest $request, ReplaceEmployeeAction $action): EmployeeResource
    {
        return new EmployeeResource($action->execute($id, $request->validated()));
    }
    public function patch(int $id, PatchEmployeeRequest $request, PatchEmployeeAction $action): EmployeeResource
    {
        return new EmployeeResource($action->execute($id, $request->validated()));
    }
    public function delete(int $id, DeleteEmployeeAction $action): EmptyResource
    {
        $action->execute($id);
        return new EmptyResource();
    }
    public function get(int $id): EmployeeResource
    {
        return new EmployeeResource(Employee::findOrFail($id));
    }
}