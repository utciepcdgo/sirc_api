<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    public function rules()
    {
        return array(
            'name' => array('required', 'min:3'),
            'first_name' => array('required', 'min:3'),
            'second_name' => array('required', 'min:3'),
            'placedate_birth' => array('required', 'json'),
            'address_length_residence' => array('required', 'json'),
            'ocupation' => array('required'),
            'voter_key' => array('required', 'regex:[A-Z]{6}[0-9]{8}[A-Z]{1}[0-9]{3}'),
            'curp' => array('required', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/'),
        );
    }

    public function authorize(): true
    {
        return true;
    }
}
