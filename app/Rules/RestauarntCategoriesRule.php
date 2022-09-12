<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RestauarntCategoriesRule implements Rule
{
    public function passes($attribute, $value)
    {
        if (!restaurant()->categories->pluck('id')->contains($value)) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'The selected category is invalid.';
    }
}
