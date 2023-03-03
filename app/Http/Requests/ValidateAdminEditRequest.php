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
            'studio' => 'required | min:2',
            'description' => 'required | min:900',
//            'movie_thumbnail' => 'required',
            'domestic_box_office' => 'required',
            'international_box_office' => 'required',
            'worldwide_box_office' => 'required',
            'director_name' => 'required | min:2',
            'age' => 'required | min:2',
            'about' => 'required | min:200',
//            'director_image' => 'required',
        ];
    }

    public function messages() {
        return [
          'movie_thumbnail.image' => 'File must be an image',
          'director_image.image' => 'File must be an image',
          'description.min' => 'A minimum of 900 characters is not allowed',
          'about.min' => 'A minimum of 200 characters is not allowed',
          'movie_name.min' => 'A minimum of 2 characters is not allowed',
          'movie_name.studio' => 'A minimum of 2 characters is not allowed',
          'movie_name.director_name' => 'A minimum of 2 characters is not allowed',
          'movie_name.age' => 'A minimum of 2 characters is not allowed',
          'movie_name.required' => 'Please fill out this field',
          'studio.required' => 'Please fill out this field',
          'description.required' => 'Please fill out this field',
          'movie_thumbnail.required' => 'Please fill out this field',
          'domestic_box_office.required' => 'Please fill out this field',
          'international_box_office.required' => 'Please fill out this field',
          'worldwide_box_office.required' => 'Please fill out this field',
          'director_name.required' => 'Please fill out this field',
          'age.required' => 'Please fill out this field',
          'about.required' => 'Please fill out this field',
          'director_image.required' => 'Please fill out this field',
        ];
    }
}
