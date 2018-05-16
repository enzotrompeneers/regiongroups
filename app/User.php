<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function addPortfolio(array $requests)
    {
        $logo = $requests['logo'];
        $name = $requests['name'];
        $description = $requests['description'];
        $street = $requests['street'];
        $housenumber = $requests['housenumber'];
        $postal_code = $requests['postal_code'];
        $city = $requests['city'];
        $country = $requests['country'];
        $phone = $requests['phone'];
        $email = $requests['email'];
        $external = $requests['external'];
        $layout = 1;
        $user_id = auth()->id();

        $this->portfolio()->create(compact('logo', 'name', 'description', 'street', 'housenumber', 'postal_code', 'city', 'country', 'phone', 'email', 'external', 'layout', 'user_id'));
    }
}
