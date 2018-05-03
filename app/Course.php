<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Course extends Authenticatable
{
  use Notifiable;
  protected $table = "courses";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'course_title', 'course_display', 'course_details', 'course_lecturer', 'lecturer_image', 'facebook_add', 'course_link',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllCourses()
  {
      return static::orderBy('course_title', 'asc')->get();
  }
  public function setCourseTitleAttribute($value)
  {
    $this->attributes['course_title'] = ucfirst($value);
  }
}
