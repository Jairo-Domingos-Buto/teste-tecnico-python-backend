<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FocoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nivel_foco" => "required|integer|min:1|max:5",
            "tempo_minutos" => "required|integer",
            "observacoes" => "string|max:255|required",
        ];
    }

    public function messages(): array
    {
        return [
            "nivel_foco.required" => "O campo nivel_foco é obrigatório.",
            "nivel_foco.integer" => "O campo nivel_foco deve ser um número inteiro.",
            "nivel_foco.min" => "O campo nivel_foco deve ser no mínimo 1.",
            "nivel_foco.max" => "O campo nivel_foco deve ser no máximo 5.",
            "tempo_minutos.required" => "O campo tempo_minutos é obrigatório.",
            "tempo_minutos.integer" => "O campo tempo_minutos deve ser um número inteiro.",
            "observacoes.required" => "O campo observacoes é obrigatório.",
            "observacoes.string" => "O campo observacoes deve ser uma string.",
            "observacoes.max" => "O campo observacoes deve ter no máximo 255 caracteres.",
        ];
    }
}
