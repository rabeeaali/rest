<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class SubmitChallengeRrequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'file' => [
                'required',
                'file',
                'mimes:zip,rar',
                'max:5000',
            ],
            'comment' => [
                'nullable',
                'string',
                'min:5',
                'max:1500'
            ],
        ];
    }
}
