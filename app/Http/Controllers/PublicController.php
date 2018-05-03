<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Course;
use App\Event;
use App\News;
use App\JointSummit;
use App\Lecturer;
use App\Testimony;
use App\HeaderDisplay;
use App\Message;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function index()
  {
    $courseList = Course::take(8)->get();
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $news = News::get();
    $event = Event::where('timeline', 'Regular')->take(1)->get();
    $course = Course::take(4)->get();
    $testimony = Testimony::where('role', '=', 1)->take(6)->get();
    return view("public.index", compact('course', 'event', 'news', 'count', 'courseList', 'courseMenuImage', 'testimony'));
  }
  public function what()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $event = Event::get();
    $lecturer = Lecturer::get();
    $whatImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();

    return view("public.what", compact('event', 'lecturer', 'whatImage', 'courseList', 'courseMenuImage'));
  }
  public function contact()
  {
    $courseList = Course::take(8)->get();  /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $contactImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.contact", compact('contactImage', 'courseList', 'courseMenuImage'));
  }
  public function courses()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $course = Course::get();
    $lastCourse = Course::orderBy('id', 'desc')->take(3)->get();
    $coursesImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.courses", compact('course', 'lastCourse', 'coursesImage', 'courseList', 'courseMenuImage'));
  }
  public function icourse()
  {
    $icourseImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.icourse", compact('icourseImage'));
  }
  public function about()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $aboutImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.about", compact('aboutImage', 'courseList', 'courseMenuImage'));
  }
  public function lecturer()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $lecturerImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.lecturer", compact('lecturerImage', 'courseList', 'courseMenuImage'));
  }
  public function gallery()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $galleryImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    return view("public.gallery", compact('galleryImage', 'courseList', 'courseMenuImage'));
  }
  public function events()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $eventImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    $regular = Event::where('timeline', 'Regular')->get();
    $happening = Event::where('timeline', 'Ongoing')->get();
    $upcoming = Event::where('timeline', 'Future')->get();
    $expired = Event::where('timeline', 'Past')->get();
    return view("public.events", compact('eventImage', 'courseList', 'courseMenuImage', 'regular', 'happening', 'upcoming', 'expired'));
  }
  public function blog()
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $blog = Blog::get();
    $blogImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    $blogLatest = Blog::orderBy('id', 'desc')->take(3)->get();
    $randomBlog = Blog::inRandomOrder()->take(3)->get();

    $side = Blog::orderBy('id', 'desc')->take(3)->get();
    return view("public.blog", compact('blogImage', 'blog', 'side', 'courseList', 'courseMenuImage', 'blogLatest', 'randomBlog'));
  }
  public function iblog($blog_title, $id)
  {
    $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
    $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
    $iblogImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
    $post = Blog::where('blog_title', $blog_title)->where('id', $id)->get()->last();
    $image = Blog::select('blog_image2 as blog_image2')->get()->last();
    $randomBlog = Blog::inRandomOrder()->take(3)->get();
    $blogOrder = Blog::orderBy('id', 'desc')->take(10)->get();
    $blogLatest = Blog::orderBy('id', 'desc')->take(3)->get();
    $lastCourse = Course::orderBy('id', 'desc')->take(3)->get();

    return view('public.iblog', compact('post', 'image', 'courseList', 'courseMenuImage', 'randomBlog', 'blogOrder', 'blogLatest', 'lastCourse'));
  }
    public function jsreg()
    {
        $courseList = Course::take(8)->get(); /* courseList is for listing courses from Database into course drop down on the menu bar */
        $courseMenuImage = Course::orderBy('id', 'desc')->take(1)->get(); /* for changing the course in the menu bar */
        $jsregImage = HeaderDisplay::orderBy('id', 'desc')->take(1)->get();
        return view('public.jsreg', compact('jsregImage', 'courseList', 'courseMenuImage'));
    }

    public function post_add_jsreg(Request $request)
    {
        $data = $request->all();
        JointSummit::create($data);
        return redirect()->back()->with("alert", "<script>alert('Successfully Registered')</script>");
    }
    public function postmessage(Request $request) {
        Message::create($request->all());

        return redirect()->back()->with('success_status', 'Successfully Posted');
    }

}
