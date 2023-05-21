<?php

namespace App\Http\ApiV1\Modules\Companies\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatchCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable','string'],
            'address' => ['nullable','string'],
        ];
    }
}