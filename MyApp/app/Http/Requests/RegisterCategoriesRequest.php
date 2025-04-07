<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCategoriesRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'correo' => 'required|unique:categories|email'
        ];
    }

    /* public function messages(){
        return [
            'name.required' => 'El campo nombre es  obligatorio',
            'name.string' => 'El campo nombre debe ser un texto',
            'name.max' => 'El campo nombre debe tener un máximo de 255 caracteres',
            'lastname.required' => 'El campo apellido es  obligatorio',
            'lastname.string' => 'El campo apellido debe ser un texto',
            'lastname.max' => 'El campo apellido debe tener un máximo de 255 caracteres',
            'correo.required' => 'El campo correo es obligatorio',
            'correo.unique' => 'El correo ya está registrado',
            'correo.email' => 'El campo correo debe ser un correo electrónico'
        ];
    } */

    // para usar el campo atributo junto con el mensaje personalizado de error utilizamos el metodo : attribute
   /*  public function attributes(){
        return [
            'name' => 'nombre',
            'lastname' => 'apellido',
            'correo' => 'correo electrónico'
        ];
    } */
}
