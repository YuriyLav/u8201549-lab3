<?php

namespace App\Http\ApiV1\Modules\Employees\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'email' => ['required', 'string'],
            'department_id' => ['required','int'],
        ];
    }
}