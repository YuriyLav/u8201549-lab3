<?php

namespace App\Http\ApiV1\Modules\Departments\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplaceDepartmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'company_id' => ['nullable','int'],
        ];
    }
}