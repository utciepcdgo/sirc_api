<?php

namespace App\Http\Requests\Registrations;

use Illuminate\Foundation\Http\FormRequest;

class SubstitutionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'first_name' => ['required'],
            'second_name' => ['required'],
            'birthplace' => ['required', 'json'],
            'residence' => ['required', 'json'],
            'occupation' => ['required'],
            'voter_key' => ['required'],
            'curp' => ['required'],
            'voter_card' => ['required', 'json'],
            'reelection' => ['required'],
            'mote' => ['nullable'],
            'block_id' => ['required', 'exists:blocks,id'],
            'position_id' => ['required', 'exists:positions,id'],
            'postulation_id' => ['required', 'exists:postulations,id'],
            'sex_id' => ['required', 'exists:sexes,id'],
            'gender_id' => ['required', 'exists:genders,id'],
            'compensatory_id' => ['required', 'exists:compensatories,id'],
            'registration_id' => ['required', 'exists:registrations,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'birthplace' => json_encode($this->birthplace),
            'residence' => json_encode($this->residence),
            'voter_card' => json_encode($this->voter_card),
        ]);
    }
}
