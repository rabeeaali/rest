<?php

namespace App\Models\Traits;

use App\Scopes\RestaurantScope;

trait RestaurantTrait
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new RestaurantScope);

        static::creating(function ($category) {
            $category->restaurant_id = restaurant()->id;
        });
    }
}
