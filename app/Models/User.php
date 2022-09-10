<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\PasswordTrait;
use App\Models\Traits\CreatedAtTrait;
use Illuminate\Notifications\Notifiable;
use App\Notifications\UserResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, PasswordTrait, CreatedAtTrait;

    protected $guarded = [];

    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('email', 'LIKE', "%$req%")
                ->orWhere('username', 'LIKE', "%$req%")
                ->orWhere('name', 'LIKE', "%$req%")
                ->orWhere('phone', 'LIKE', "%$req%");
        });
    }

    public function sendPasswordResetNotification($token)
    {
        $url = url(route('user.password.reset', ['token' => $token, 'email' => $this->email]));

        $this->notify(new UserResetPasswordNotification($url));
    }

    public function getImagePathAttribute()
    {
        return $this->image ? asset('files/avatars/' . $this->image) : asset('images/default-user.jpg');
    }

    public function getCvPathAttribute()
    {
        return asset("files/cvs/$this->cv");
    }

    public function getGetProjectsAttribute()
    {
        return $this->projects ? explode(',', $this->projects) : [];
    }

    public function getGetSkillsAttribute()
    {
        return $this->skills ? explode(',', $this->skills) : [];
    }

    public function isNotActive()
    {
        return !$this->is_active;
    }
}
