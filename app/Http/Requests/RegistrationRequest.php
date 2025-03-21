<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'first_name' => ['required', 'string', function ($attribute, $value, $fail) {
                if ($value !== 'X' && strlen($value) < 3) {
                    $fail("El campo $attribute debe tener al menos 3 caracteres o ser 'X'.");
                }
            }],
            'second_name' => ['required', 'string', function ($attribute, $value, $fail) {
                if ($value !== 'X' && strlen($value) < 3) {
                    $fail("El campo $attribute debe tener al menos 3 caracteres o ser 'X'.");
                }
            }],
            'birthplace' => ['required', 'json'],
            'residence' => ['required', 'json'],
            'occupation' => ['required', 'min:3'],
            'voter_key' => ['required', 'regex:/^[A-Z]{6}[0-9]{8}[A-Z]{1}[0-9]{3}/'],
            'curp' => ['required', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[0-9A-J][0-9])$/i'],
            'voter_card' => ['required', 'json'],
            'council_number' => [
                // Si postulation_id = 5 (Regidor) es obligatorio, de lo contrario es nulo
                Rule::requiredIf($this->postulation_id === '5'),
            ],
            'block_id' => ['required', 'exists:blocks,id'],
            'position_id' => ['required', 'exists:positions,id'],
            'postulation_id' => ['required', 'exists:postulations,id'],
            'sex_id' => ['required', 'exists:sexes,id'],
            'compensatory_id' => ['required', 'exists:compensatories,id'],
            'gender_id' => [
                Rule::requiredIf($this->input('compensatory_id') === '3'),
                'exists:genders,id',
            ],
            'reelection' => ['required', 'in:Si,No'],
            'mote' => [
                // Si postulation_id = 3 y position_id = 1, se permite un valor opcional
                Rule::when(
                    $this->postulation_id === '3' && $this->position_id === '1',
                    ['nullable', 'string', 'max:255']
                ),
                // Si no se cumplen las condiciones, no debe aceptar valores (solo null)
                Rule::prohibitedIf(! ($this->postulation_id === '3' && $this->position_id === '1')),
            ],
            'status' => ['in:FORMALLY_PRESENTED,AWAITING_PRESENTATION,SUBSTITUTED,APPROVED,REJECTED'],
        ];
    }

    public function authorize(): true
    {
        return true;
    }

    public function messages()
    {
        return [
            'mote.prohibited' => 'El mote solo es permitido para Candidaturas Propietarias a Presidencia Municipal',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Errores en la validación de los datos',
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
