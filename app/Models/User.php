<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin()
    {
        return $this->role_id == Role::ADMIN;
    }

    public function isCustomer()
    {
        return $this->role_id == Role::CUSTOMER;
    }

    public function isAuthor()
    {
        return $this->role_id == Role::AUTHOR;
    }

    public function isProveidor()
    {
        return $this->role_id == Role::PROVEEDOR;
    }

    
    public function brake()
    {
        return $this->hasMany(Brake::class);
    }
    public function engine()
    {
        return $this->hasMany(Engine::class);
    }

    public function light()
    {
        return $this->hasMany(Light::class);
    }

    public function sideskirt()
    {
        return $this->hasMany(Sideskirt::class);
    }

    public function spoiler()
    {
        return $this->hasMany(Spoiler::class);
    }

    public function suspension()
    {
        return $this->hasMany(Suspension::class);
    }

    public function wheel()
    {
        return $this->hasMany(Wheel::class);
    }

}
