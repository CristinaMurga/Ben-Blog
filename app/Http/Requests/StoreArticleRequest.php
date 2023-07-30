<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|max:150',
            'categories'=> 'required',
            'description' => 'required|max:150',
            'body' => 'required|max:5000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio.',
            'title.max' => 'Il campo titolo può contenere massimo 150 caratteri.',
            'categories.required'=> 'Seleziona almeno una categoria',
            'description.required'=> 'Il campo descrizione è obbligatorio.',
            'description.max' => 'Il campo descrizione può contenere massimo 150 caratteri.',
            'body.required'=> 'Il campo corpo è obbligatorio.',
            'body.max' => 'Il campo corpo può contenere massimo 5000 caratteri.'
        ];
    }
}
