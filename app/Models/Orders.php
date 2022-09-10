<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    const PENDING = "pending";
    const DELIVERY = "delivery";
    const DELIVERED = "delivered";
    const CANCELED = "canceled";

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot(['quantity', 'price'])
            ->withTimestamps();
    }

    public function isPending()
    {
        return $this->status == self::PENDING;
    }

    public function isDelivery()
    {
        return $this->status == self::DELIVERY;
    }

    public function isDelivered()
    {
        return $this->status == self::DELIVERED;
    }

    public function isCanceled()
    {
        return $this->status == self::CANCELED;
    }
}
