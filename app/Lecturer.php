<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Lecturer extends Authenticatable
{
  use Notifiable;
  protected $table = "lecturers";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'lecturer_name', 'lecturer_details', 'facebook_add', 'twitter_add', 'linkedin_add', 'lecturer_display',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllLecturer()
  {
      return static::orderBy('lecturer_name', 'asc')->get();
  }
  public function setLecturerNameAttribute($value)
  {
    $this->attributes['lecturer_name'] = ucfirst($value);
  }
}
