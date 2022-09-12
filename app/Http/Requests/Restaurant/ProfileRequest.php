<?php

namespace App\Http\Requests\Restaurant;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('restaurants')->ignore(restaurant()->id)],
            'password' => ['sometimes', 'nullable', 'string', 'min:6', 'max:255'],
            'image' => ['sometimes', 'nullable', 'file', 'mimes:png,jpg', 'max:2048'],
        ];
    }
}
