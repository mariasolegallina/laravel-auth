<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'unique:projects,title|max:255|required',
            'description' => 'max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo è obbligatorio',

            'title.unique' => "È già presente un progetto con lo stesso titolo",
            'title.max' => "Il titolo deve avere massimo :max caratteri",

            'description.max' => "Il testo non puù superare i :max caratteri",
        ];
    }
}
