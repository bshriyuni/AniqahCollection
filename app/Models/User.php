<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'notlp', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }
}