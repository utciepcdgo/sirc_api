<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MigrantRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'address' => ['required'],
            'zip_code' => ['required'],
            'country_id' => ['required', 'exists:countries,id'],
            'registration_id' => ['required', 'exists:registrations,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
