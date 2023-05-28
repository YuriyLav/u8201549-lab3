<?php

namespace App\Http\ApiV1\Modules\Companies\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'address' => ['required','string'],
        ];
    }
}