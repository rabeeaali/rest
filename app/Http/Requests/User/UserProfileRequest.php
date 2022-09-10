<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'headline' => ['required', 'string',  'min:3', 'max:255'],
            'city' => ['nullable', 'sometimes', 'string', 'min:3', 'max:255'],
            'phone' => ['nullable', 'sometimes', 'string', 'min:10', 'max:11', Rule::unique('users')->ignore(user()->id)],
            'cv' => ['nullable', 'sometimes', 'file', 'max:2048'],
            'skills' => ['nullable', 'string', 'max:500'],
            'projects' => ['nullable', 'array'],
            'projects.*' => ['nullable', 'string', 'min:3'],
        ];
    }
}
