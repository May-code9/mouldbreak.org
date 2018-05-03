<?php

namespace App\Http\Controllers;

use App\User;
use App\Course;
use App\Event;
use App\News;
use App\Team;
use App\Lecturer;
use App\Blog;
use App\Message;
use Image;
use App\Testimony;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class DashController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    if (Auth::user()->role == 4)
    {
      $user = User::get();
      $course = Course::get();
      $countUser = User::where('role', '<', 4);
      $event =  Event::get();
      $news = News::get();
      $lecturer = Lecturer::get();
      $blog = Blog::get();
      $testimony = Testimony::get();
      $index_active = "active";

      for ($i = 0; $i < count($user); $i++):

      endfor;
      for ($j = 0; $j < count($course); $j++):

      endfor;
      for ($i = 0; $i < count($event); $i++):

      endfor;
      for ($i = 0; $i < count($news); $i++):

      endfor;
      for ($k = 0; $k < count($countUser); $k++):

      endfor;
      for ($k = 0; $k < count($lecturer); $k++):

      endfor;
      for ($k = 0; $k < count($blog); $k++):

      endfor;
      for ($k = 0; $k < count($testimony); $k++):

      endfor;

      return view("admin.layouts.index", compact('user', 'course', 'countUser', 'index_active', 'event', 'news', 'lecturer', 'blog', 'testimony' ));
    }
    else {
      return redirect('/');
    }
  }
  public function courses()
  {
    if (Auth::user()->role == 4){
      $form_active = "active";
      return view("admin.layouts.form.courses", compact('form_active'));
    }
    else {
      return redirect('/');
    }
  }
  public function events()
  {
    if (Auth::user()->role == 4){
      $form_active = "active";
      return view("admin.layouts.form.events", compact('form_active'));
    }
    else {
      return redirect('/');
    }
  }
  public function news()
  {
    if (Auth::user()->role == 4){
      $form_active = "active";
      return view("admin.layouts.form.news", compact('form_active'));
    }
    else {
      return redirect('/');
    }
  }
  public function lecturers()
  {
    $form_active = "active";
    return view("admin.layouts.form.lecturers", compact('form_active'));
  }
  public function calender()
  {
    $calender_active = "active";
    return view("admin.layouts.calender", compact('calender_active'));
  }
  public function header_image()
  {
    if (Auth::user()->role == 4){
    return view("admin.layouts.display.header_image");
    }
    else {
      return redirect('/');
    }
  }
  public function blog()
  {
    $form_active = "active";
    return view("admin.layouts.form.blog", compact('form_active'));
  }
  public function testimony()
  {
    if (Auth::user()->role == 4){
      $testimony = Testimony::get();
      $testimony_active = "active";
      return view('admin.layouts.testimony', compact('testimony', 'testimony_active'));
    }
    else {
      return redirect('/');
    }
  }
  public function table_testimony()
  {
    if (Auth::user()->role == 4){
      $testimony = Testimony::paginate(10);
      return view('admin.layouts.table.testimony', compact('testimony'));
    }
    else {
      return redirect('/');
    }
  }
  public function messages() {
    if (Auth::user()->role == 4){
      $messages = Message::paginate(10);
      return view('admin.layouts.table.messages', compact('messages'));
    }
    else {
      return redirect('/');
    }
  }
}
