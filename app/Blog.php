<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Blog extends Authenticatable
{
  use Notifiable;
  protected $table = "blogs";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'blog_title', 'blog_image', 'blog_image2', 'blog_author', 'blog_message', 'blog_category', 'author_details', 'author_image',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

public static function getAllBlogs()
  {
      return static::orderBy('blog_title', 'asc')->get();
  }
  public function setBlogTitleAttribute($value)
  {
    $this->attributes['blog_title'] = ucfirst($value);
  }
}
