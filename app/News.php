<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class News extends Authenticatable
{
  use Notifiable;
  protected $table = "news";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'news_title', 'news_display', 'news_details', 'news_handler',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllNews()
  {
      return static::orderBy('news_title', 'asc')->get();
  }
  public function setnewsTitleAttribute($value)
  {
    $this->attributes['news_title'] = ucfirst($value);
  }
}
