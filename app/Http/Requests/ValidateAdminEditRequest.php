<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAdminEditRequest extends FormRequest
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
            'movie_description' => 'required | min:900',
            'movie_thumbnail' => 'required',
            'movie_domestic_box_office' => 'required',
            'movie_international_box_office' => 'required',
            'movie_worldwide_box_office' => 'required',
            'director_name' => 'required | min:2',
            'director_age' => 'required | min:2',
            'director_about' => 'required | min:200',
            'director_image' => 'required',
        ];
    }

    public function messages() {
        return [
            'movie_name.required' => 'This field cannot be submitted empty',
            'movie_name.min' => 'Not less than 2 characters are allowed',
            'movie_studio.required' => 'This field cannot be submitted empty',
            'movie_studio.min' => 'Not less than 2 characters are allowed',
            'movie_description.required' => 'This field cannot be submitted empty',
            'movie_description.min' => 'Not less than 900 characters are allowed',
            'movie_thumbnail.required' => 'This field cannot be submitted empty',
            'movie_domestic_box_office.required' => 'This field cannot be submitted empty',
            'movie_international_box_office.required' => 'This field cannot be submitted empty',
            'movie_worldwide_box_office.required' => 'This field cannot be submitted empty',
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
