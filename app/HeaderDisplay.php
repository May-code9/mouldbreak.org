<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class HeaderDisplay extends Authenticatable
{
  use Notifiable;
  protected $table = "header_displays";

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'display_image',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public static function getAllDisplay()
  {
    return static::orderBy('display_image', 'asc')->get();
  }
}
