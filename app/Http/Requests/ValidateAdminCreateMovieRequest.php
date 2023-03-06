<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAdminCreateMovieRequest extends FormRequest
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
            'movie_name' => 'required | min:2',
            'movie_studio' => 'required | min:2',
            'movie_description' => 'required | min:500',
            'movie_thumbnail' => 'required',
            'movie_domestic_box_office' => 'required',
            'movie_international_box_office' => 'required',
        ];
    }

    public function messages() {
        return [
            'movie_name.required' => 'This field cannot be submitted empty',
            'movie_name.min' => 'Not less than 2 characters are allowed',
            'movie_studio.required' => 'This field cannot be submitted empty',
            'movie_studio.min' => 'Not less than 2 characters are allowed',
            'movie_description.required' => 'This field cannot be submitted empty',
            'movie_description.min' => 'Not less than 500 characters are allowed',
            'movie_thumbnail.required' => 'This field cannot be submitted empty',
            'movie_domestic_box_office.required' => 'This field cannot be submitted empty',
            'movie_international_box_office.required' => 'This field cannot be submitted empty',
        ];
    }
}
