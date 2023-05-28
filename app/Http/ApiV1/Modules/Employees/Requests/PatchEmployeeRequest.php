<?php

namespace App\Http\ApiV1\Modules\Employees\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchEmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable','string'],
            'email' => ['nullable', 'string'],
            'department_id' => ['nullable','int'],
        ];
    }
}