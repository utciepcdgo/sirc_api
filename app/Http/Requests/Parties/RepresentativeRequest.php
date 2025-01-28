<?php

namespace App\Http\Requests\Parties;

use Illuminate\Foundation\Http\FormRequest;

class RepresentativeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            '*.name' => ['required'],
            '*.ownership' => ['required'],
            '*.entity_id' => ['required', 'exists:entities,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
