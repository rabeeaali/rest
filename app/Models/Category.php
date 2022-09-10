<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\RestaurantTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, RestaurantTrait;

    const PATH = 'categories';

    protected $guarded = [];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getImagePathAttribute()
    {
        return asset('files/categories/' . $this->image);
    }

    public function scopeSearch($query)
    {
        $query->where(function ($query) {
            $query->where('name', 'LIKE', '%' . request('search') . '%');
        });
    }

    // relations
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
