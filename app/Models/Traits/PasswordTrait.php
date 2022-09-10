<?php

namespace App\Models\Traits;

trait PasswordTrait
{
    public function setPasswordAttribute($value)
    {
        if (trim($value) === '') {
            return;
        }
        $this->attributes['password'] = bcrypt($value);
    }
}
