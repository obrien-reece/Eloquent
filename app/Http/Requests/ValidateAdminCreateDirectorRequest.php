<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAdminCreateDirectorRequest extends FormRequest
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
            'director_name' => 'required | min:2',
            'director_age' => 'required | min:2 | integer',
            'director_about' => 'required | min:100',
            'director_image' => 'required',
        ];
    }

    public function messages() {
        return [
            'director_name.required' => 'This field cannot be submitted empty',
            'director_name.min' => 'Not less than 2 characters are allowed',
            'director_age.required' => 'This field cannot be submitted empty',
            'director_age.min' => 'Not less than 2 characters are allowed',
            'director_about.required' => 'This field cannot be submitted empty',
            'director_about.min' => 'Not less than 200 characters are allowed',
            'director_image.required' => 'This field cannot be submitted empty',
        ];
    }
}
