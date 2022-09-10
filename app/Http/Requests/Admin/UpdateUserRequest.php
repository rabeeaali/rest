<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['sometimes', 'nullable', 'string', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'phone' => ['sometimes', 'nullable', 'string', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'email' => ['sometimes', 'nullable', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)],
            'password' => ['sometimes', 'nullable', 'string', 'min:6'],
        ];
    }
}
