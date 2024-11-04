<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return array(
            'name' => array('required', 'min:3'),
            'first_name' => array('required', 'min:3'),
            'second_name' => array('required', 'min:3'),
            'birthplace' => array('required', 'json', 'json_schema_validator:birthplace.json'),
            'address_length_residence' => array('required', 'json', 'json_schema_validator:address_length_residence.json'),
            'occupation' => array('required'),
            'voter_key' => array('required', 'regex:[A-Z]{6}[0-9]{8}[A-Z]{1}[0-9]{3}'),
            'curp' => array('required', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'),
            'voter_card' => array('required', 'json', 'json_schema_validator:voter_card.php'),
        );
    }

    public function authorize(): true
    {
        return true;
    }

    public function messages(): array
    {
        return array(
            'expectedData.required' => 'required.jsonData',
            'expectedData.json' => 'expectedData.needs.needs.to.be.a.valid.json',
        );
    }
}
