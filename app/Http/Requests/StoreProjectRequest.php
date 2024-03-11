<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'nullable|max:5000',
            'technologies' => 'nullable|string|max:255',
            'creation_date' => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Questo campo è obbligatorio.',
            'name.max' => 'Questo campo non può superare i 255 caratteri.',
            'description.max' => 'Questo campo non può superare i 5000 caratteri.',
            'technologies.required' => 'Questo campo è obbligatorio.',
            'technologies.max' => 'Questo campo non può superare i 255 caratteri.',
            'creation_date.required' => 'Questo campo è obbligatorio.',
            'creation_date' => 'Inserisci una data di inizio valida.',
        ];
    }
}