<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Testimony extends Authenticatable
{
  use Notifiable;
  protected $table = "testimonies";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'fullname', 'testimony', 'image', 'role',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllTestimonies()
  {
      return static::orderBy('fullname', 'asc')->get();
  }
  public function setFullnameAttribute($value)
  {
    $this->attributes['fullname'] = ucfirst($value);
  }
}
