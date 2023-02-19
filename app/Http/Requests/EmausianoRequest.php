<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class EmausianoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nro' => 'required|numeric|min:1',
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => Rule::unique('emaus_datos_del_servidor', 'cedula')->ignore($this->route('id')),
            'fecha_nacimiento' => 'required',
            'numero_telefono' => 'required|regex:/^\+[0-9]+ [0-9]+ [0-9]+$/|min:10|max:15',
            'direccion_habitacion' => 'required',
            'estado_civil' => 'required',
            'bautismo' => 'required',
            'comunion' => 'required',
            'confirmacion' => 'required',
            'matrimonio' => 'required',
            'sexo' => 'required',
            'nro_retiro' => 'required|numeric|min:1',
            'fecha_retiro' => 'required',
            'parroquia' => 'required',
            'pueblo_ciudad' => 'required',
        ];
    }

    /**
     * Get the custom validation error messages for the request.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'cedula.unique' => 'El número de cédula ya está registrada en la base de datos.',
        ];
    }

    /**
     * Handle the validation error response.
     *
     * @param \Illuminate\Contracts\Validation\Validator $validator
     */
    public function failedValidation(Validator $validator)
    {
        $errors = $validator->errors()->all();

        throw new HttpResponseException(response()->json([
            'status' => false,
            'error_string' => $errors,
        ]));
    }
}
