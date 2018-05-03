<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class JointSummit extends Authenticatable
{
    use Notifiable;
    protected $table = "jsreg";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'whatsapp_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setFirstNameAttribute($value)
    {
      $this->attributes['first_name'] = ucfirst($value);
    }
    public function setLastNameAttribute($value)
    {
      $this->attributes['last_name'] = ucfirst($value);
    }
}
