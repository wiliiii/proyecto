<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatperRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'no_historia' => 'required',
			'CI' => 'required',
			'nombre1' => 'required|string',
			'appaterno' => 'required|string',
			'apmaterno' => 'required|string',
			'sexo' => 'required|string',
			'est_civil' => 'required|string',
			'fec_nac' => 'required',
			'direccion' => 'required|string',
			'fono' => 'required',
			'fono2' => 'required',
			'celular' => 'required',
			'ciudad' => 'required|string',
        ];
    }
}
