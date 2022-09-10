<?php

namespace App\Http\Requests\Restaurant;

use App\Rules\RestauarntCategoriesRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:1024'],
            'category_id' => ['required', new RestauarntCategoriesRule()],
            'quantity' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:1'],
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'category',
        ];
    }
}
