<?php

namespace App\Http\ApiV1\Modules\Departments\Controllers;

use App\Domain\Departments\Models\Department;
use App\Domain\Departments\Actions\CreateDepartmentAction;
use App\Domain\Departments\Actions\DeleteDepartmentAction;
use App\Domain\Departments\Actions\PatchDepartmentAction;
use App\Domain\Departments\Actions\ReplaceDepartmentAction;
use App\Http\ApiV1\Modules\Departments\Requests\AddDepartmentRequest;
use App\Http\ApiV1\Modules\Departments\Requests\PatchDepartmentRequest;
use App\Http\ApiV1\Modules\Departments\Requests\ReplaceDepartmentRequest;
use App\Http\ApiV1\Modules\Departments\Resources\DepartmentResource;
use App\Http\ApiV1\Modules\Support\Resources\EmptyResource;

class DepartmentController
{
    public function create(AddDepartmentRequest $request, CreateDepartmentAction $action): DepartmentResource
    {
        return new DepartmentResource($action->execute($request->validated()));
    }
    public function replace(int $id, ReplaceDepartmentRequest $request, ReplaceDepartmentAction $action): DepartmentResource
    {
        return new DepartmentResource($action->execute($id, $request->validated()));
    }
    public function patch(int $id, PatchDepartmentRequest $request, PatchDepartmentAction $action): DepartmentResource
    {
        return new DepartmentResource($action->execute($id, $request->validated()));
    }
    public function delete(int $id, DeleteDepartmentAction $action): EmptyResource
    {
        $action->execute($id);
        return new EmptyResource();
    }
    public function get(int $id): DepartmentResource
    {
        return new DepartmentResource(Department::findOrFail($id));
    }
}