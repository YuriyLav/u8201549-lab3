<?php

namespace App\Http\ApiV1\Modules\Employees\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReplaceEmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'email' => ['required', 'string'],
            'company_id' => ['nullable','int'],
        ];
    }
}