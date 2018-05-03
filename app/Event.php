<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Event extends Authenticatable
{
  use Notifiable;
  protected $table = "events";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'event_title', 'event_display', 'event_details', 'event_speaker', 'event_venue', 'event_day', 'event_month', 'event_time', 'timeline',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllEvents()
  {
      return static::orderBy('event_title', 'asc')->get();
  }
  public function setEventTitleAttribute($value)
  {
    $this->attributes['event_title'] = ucfirst($value);
  }
  public function getShortDetailsAttribute() {
    return substr($this->event_details, 0, 300). '...';
  }
}
