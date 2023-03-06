<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAdminCreateActorRequest extends FormRequest
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
            'actors_name' => 'required | min:2',
            'actors_age' => 'required | min:2 | integer',
            'actors_about' => 'required | min:200',
        ];
    }

    public function messages() {
        return [
            'actors_name.required' => 'This field cannot be submitted empty',
            'actors_name.min' => 'Not less than 2 characters are allowed',
            'actors_age.required' => 'This field cannot be submitted empty',
            'actors_age.min' => 'Not less than 2 characters are allowed',
            'actors_about.required' => 'This field cannot be submitted empty',
            'actors_about.min' => 'Not less than 200 characters are allowed',
        ];
    }
}
