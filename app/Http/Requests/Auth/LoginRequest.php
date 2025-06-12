<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            //
            'identifier' => ['required', 'string'],
            'password' => 'required|string|min:8',
        ];
    }


    public function messages()
    {
        return [
            'identifier.required' => 'Veuillez entrer votre identifiant (email ou nom d’utilisateur).',
            'password.required' => 'Veuillez entrer votre mot de passe.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractère.',
        ];
    }

    public function attributes(): array
    {
        return [
            'identifier' => 'identifiant',
            'password' => 'mot de passe',
        ];
    }
}
