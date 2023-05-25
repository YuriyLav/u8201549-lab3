<?php

namespace App\Http\ApiV1\Modules\Departments\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchDepartmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable','string'],
            'company_id' => ['nullable','int'],
        ];
    }
}