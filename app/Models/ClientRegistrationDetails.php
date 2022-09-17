<?php

namespace App\Models;

use GuzzleHttp\Client;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ClientRegistrationDetails extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

 
    protected $fillable = [
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


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
