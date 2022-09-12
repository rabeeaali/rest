<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\PasswordTrait;
use App\Models\Traits\CreatedAtTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Notifications\CompnayResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Restaurant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, PasswordTrait, CreatedAtTrait;

    protected $guarded = [];

    public function getImagePathAttribute()
    {
        return $this->image ? asset('files/restaurants/' . $this->image) : asset('images/default-user.jpg');
    }

    public function isNotActive()
    {
        return !$this->is_active;
    }

    public function sendPasswordResetNotification($token)
    {
        $url = url(route('restaurant.password.reset', ['token' => $token, 'email' => $this->email]));

        $this->notify(new CompnayResetPasswordNotification($url));
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });
    }

    public function restaurantTimes()
    {
        return $this->hasMany(RestaurantTime::class);
    }
}
