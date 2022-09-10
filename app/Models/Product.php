<?php

namespace App\Models;

use App\Models\Traits\RestaurantTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, RestaurantTrait;

    public const PATH = 'products';

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function getImagePathAttribute()
    {
        return $this->image ? asset('files/products/' . $this->image) : asset('images/default.jpg');
    }

    public function scopeSearch($query)
    {
        $query->where(function ($query) {
            $query->where('name', 'LIKE', '%' . request('search') . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('quantity', 'price', 'total_price')
            ->withTimestamps();
    }
}
