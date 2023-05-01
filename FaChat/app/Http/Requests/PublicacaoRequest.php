<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacaoRequest extends FormRequest
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
            'titulo' => 'required',
            'conteudo' => 'required',
            'materia' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título é obrigatório',
            'conteudo.required' => 'O conteudo é obrigatório',
            'materia.required' => 'É necessário escolher uma matéria'
        ];
    }
}
