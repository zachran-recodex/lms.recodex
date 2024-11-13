<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',    // Added first_name
        'last_name',     // Added last_name
        'username',      // Added username
        'email',         // Optional email
        'password',      // Password field
        'phone_number',  // Added phone_number
        'address',       // Added address
        'country',       // Added country
        'state',         // Added state
        'city',          // Added city
        'zip_code',      // Added zip_code
        'office_phone',  // Added office_phone
        'organization',  // Added organization
        'profile_picture', // Added profile_picture
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
