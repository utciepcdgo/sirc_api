<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribedRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'entity_id' => ['required', 'exists:entities'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
