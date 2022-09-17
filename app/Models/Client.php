<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'registration_code',
        'password',
        'last_name',
        'first_name',
        'other_name',
        'ghana_card',
        'date_of_birth',
        'email',
        'residential_address',
        'gps_address',
        'community',
        'region',
        'district',
        'level_of_education',
        'next_of_kin',
        'next_of_kin_phone_number',
        'momo_network',
        'momo_number',
        'module',
        'module_question',
        'module_number',
        'aggreement'
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

    public function registrationDetails()
    {
        return $this->hasOne(ClientRegistrationDetails::class);
    }
}
