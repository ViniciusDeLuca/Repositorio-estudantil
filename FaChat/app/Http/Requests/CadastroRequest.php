<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required|unique:usuario,email',
            'senha' => 'required|confirmed|min:8'
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'O nome é obrigatório',
            'nome.required' => 'O sobrenome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.unique' => 'Email já cadastrado',
            'senha.required' => 'A senha é obrigatória',
            'senha.min' => 'A senha deve possuir no mínimo 8 caracteres',
            'confirmed' => 'As senhas digitadas não coincidem'
        ];
    }
}
