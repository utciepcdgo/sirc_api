<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3'],
            'first_name' => ['required', 'min:3'],
            'second_name' => ['required', 'min:3'],
            'birthplace' => ['required', 'json'],
            'residence' => ['required', 'json'],
            'occupation' => ['required', 'min:3'],
            'voter_key' => ['required', 'regex:/^[A-Z]{6}[0-9]{8}[A-Z]{1}[0-9]{3}/'],
            'curp' => ['required', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'],
            'voter_card' => ['required', 'json'],
            'block_id' => ['required', 'exists:blocks,id'],
            'position_id' => ['required', 'exists:positions,id'],
            'postulation_id' => ['required', 'exists:postulations,id'],
            'sex_id' => ['required', 'exists:sexes,id'],
            'gender_id' => ['required', 'exists:genders,id'],
            'compensatory_id' => ['required', 'exists:compensatories,id'],
        ];
    }

    public function authorize(): true
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'data' => $validator->errors(),
        ], 400));
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
