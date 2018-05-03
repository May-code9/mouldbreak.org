<?php

namespace App\Http\Controllers;

use Image;
use App\Blog;
use App\Course;
use App\Event;
use App\News;
use App\Lecturer;
use App\HeaderDisplay;
use App\Testimony;
use Illuminate\Http\Request;

class ImageController extends Controller
{
  public function post_add_course(Request $request) {
    $delete = $request->get('course_title');
    /* Add data to database */
    if($request->has('add_course'))
    {
      $photo = $request->file('course_display');
      $photo2 = $request->file('lecturer_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();
      $imagename2 = time().'1.'.$photo2->getClientOriginalExtension();

      $destinationPath = public_path('/wp-content/uploads/2015/11');
      $thumb_img = Image::make($photo->getRealPath())->resize(400, 250);
      $thumb_img2 = Image::make($photo2->getRealPath())->resize(40, 40);
      $thumb_img->save($destinationPath.'/'.$imagename);
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();
      $data['course_display'] = $imagename;
      $data['lecturer_image'] = $imagename2;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Course::create($data);
    }
    /* Delete data from Database */
    else {
      Course::where('course_title', $delete)->delete();
    }
    return redirect()->back()->with("success_status", "Success")->withInput();
  }

  public function post_add_event(Request $request) {
    $delete = $request->get('event_title');

    /* Add data to database */
    if($request->has('add_event'))
    {
      $photo = $request->file('event_display');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/666775544547ffcvcvv_66fdcg/thumbnail_uploads');
      $thumb_img = Image::make($photo->getRealPath())->resize(450, 450);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $data = $request->all();
      $data['event_display'] = $imagename;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Event::create($data);
      return redirect()->back()->with("success_status", "Successfully Added");
    }
    /* Delete data from Database */
    else {
      Event::where('event_title', $delete)->delete();
      return redirect()->back()->with("success_status", "Successfully Deleted")->withInput();
    }
  }

  public function post_add_news(Request $request) {
    $delete = $request->get('news_title');

    /* Add data to database */
    if($request->has('add_news'))
    {
      $photo = $request->file('news_display');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/666775544547ffcvcvv_66fdcg/thumbnail_uploads');
      $thumb_img = Image::make($photo->getRealPath())->resize(450, 267);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $data = $request->all();
      $data['news_display'] = $imagename;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      News::create($data);
      return redirect()->back()->with("success_status", "Successfully Added");
    }
    /* Delete data from Database */
    else {
      News::where('news_title',$delete)->delete();
      return redirect()->back()->with("success_status", "Successfully Deleted")->withInput();
    }
  }
  public function post_add_lecturer(Request $request) {
    $delete = $request->get('lecturer_name');
    /* Add data to database */
    if($request->has('add_lecturer'))
    {
      $photo = $request->file('lecturer_display');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/wp-content/uploads/2015/11');
      $thumb_img = Image::make($photo->getRealPath())->resize(200, 200);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $data = $request->all();
      $data['lecturer_display'] = $imagename;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Lecturer::create($data);
      return redirect()->back()->with("success_status", "Successfully Added");
    }
    /* Delete from database */
    else {
      Lecturer::where('lecturer_name', $delete)->delete();
      return redirect()->back()->with("success_status", "Successfully Deleted")->withInput();
    }
  }
  public function post_add_header_image(Request $request) {

    $photo = $request->file('display_image');
    $imagename = time().'.'.$photo->getClientOriginalExtension();

    $destinationPath = public_path('/wp-content/themes/eduma/images');
    $thumb_img = Image::make($photo->getRealPath())->resize(1920, 500);

    $thumb_img->save($destinationPath.'/'.$imagename);

    $data = $request->all();
    $data['display_image'] = $imagename;

    if(isset($data['_token'])):
      unset($data['_token']);
    endif;

    HeaderDisplay::create($data);
    return redirect()->back()->with("success_status", "Successfully Added");
  }
  public function post_add_blog(Request $request) {
    $delete = $request->get('blog_title');
    /* Add data to database */
    if($request->has('add_blog'))
    {
      $photo = $request->file('blog_image');
      $photo2 = $request->file('blog_image2');
      $photo3 = $request->file('author_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();
      $imagename2 = time().'1.'.$photo2->getClientOriginalExtension();
      $imagename3 = time().'2.'.$photo3->getClientOriginalExtension();

      $destinationPath = public_path('/wp-content/uploads/2016/01');
      $destinationPath2 = public_path('/wp-content/uploads/2016/02');
      $destinationPath3 = public_path('/wp-content/uploads/2016/03');
      $thumb_img = Image::make($photo->getRealPath())->resize(300, 200);
      $thumb_img2 = Image::make($photo2->getRealPath())->resize(763, 393);
      $thumb_img3 = Image::make($photo3->getRealPath())->resize(150, 150);
      $thumb_img->save($destinationPath.'/'.$imagename);
      $thumb_img2->save($destinationPath2.'/'.$imagename2);
      $thumb_img3->save($destinationPath3.'/'.$imagename3);

      $data = $request->all();
      $data['blog_image'] = $imagename;
      $data['blog_image2'] = $imagename2;
      $data['author_image'] = $imagename3;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Blog::create($data);
      return redirect()->back()->with("success_status", "Successfully Added");
    }
    /* Delete from database */
    else {
      Blog::where('blog_title', $delete)->delete();
      return redirect()->back()->with("success_status", "Successfully Deleted")->withInput();
    }
  }
  public function post_add_testimony(Request $request) {
    $delete = $request->get('id');
    $update = $request->get('id');
    $role = $request->get('role');
    /* Add data to database */
    if($request->has('add_testimony'))
    {
      /* if($request->hasFile('image'))
      {
        $photo = $request->file('image');
        $imagename = time().'.'.$photo->getClientOriginalExtension();

        $destinationPath = public_path('/666775544547ffcvcvv_66fdcg/thumbnail_uploads');
        $thumb_img = Image::make($photo->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename); */

        $data = $request->all();
        /** $data['image'] = $imagename; **/

        if(isset($data['_token'])):
          unset($data['_token']);
        endif;

        Testimony::create($data);
        return redirect()->route('public_home')->with("success_status", "Successfully Added")->with("alert", "<script>alert('Testimony Added')</script>");
      /**}
      else {
        return view ('home');
      }**/
    }
    /* Update data from Database */
    elseif ($request->has('approve_testimony')) {
      Testimony::where('id',$update)->update(['role'=>$role]);
      return redirect()->back()->with("success_status", "Successfully Updated")->withInput();
    }
    /* Delete data from Database */
    else {
      Testimony::where('id',$delete)->delete();
      return redirect()->back()->with("success_status", "Successfully Deleted")->withInput();
    }
  }
}
