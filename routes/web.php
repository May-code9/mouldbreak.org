<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'public_home', 'uses'=>'PublicController@index']);
Route::post('/', ['as'=>'public_home', 'uses'=>'PublicController@index']);
Route::post('/', ['as'=>'testimony.send', 'uses'=>'ImageController@post_add_testimony']);
Route::get('/what is mouldbreak', ['as'=>'public_what', 'uses'=>'PublicController@what']);
Route::get('/contact', ['as'=>'public_contact', 'uses'=>'PublicController@contact']);
Route::get('/courses', ['as'=>'public_courses', 'uses'=>'PublicController@courses']);
Route::get('/icourse', ['as'=>'public_icourse', 'uses'=>'PublicController@icourse']);
Route::get('/about us', ['as'=>'public_about', 'uses'=>'PublicController@about']);
Route::get('/what/lecturer', ['as'=>'public_lecturer', 'uses'=>'PublicController@lecturer']);
Route::get('/gallery', ['as'=>'public_gallery', 'uses'=>'PublicController@gallery']);
Route::get('/events', ['as'=>'public_events', 'uses'=>'PublicController@events']);
Route::get('/blog', ['as'=>'public_blog', 'uses'=>'PublicController@blog']);
Route::get('/iblog/{blog_title}/{id}', ['as'=>'public_iblog', 'uses'=>'PublicController@iblog']);
Route::get('/Joint Summit Registration', ['as'=> 'public_jsreg', 'uses'=>'PublicController@jsreg']);
Route::post('/Joint_Summit_Registration', ['as'=>'joint.summit.register' , 'uses'=>'PublicController@post_add_jsreg']);
Route::post('/message', ['as'=>'message.contact', 'uses'=>'PublicController@postmessage']);


Auth::routes();

/* Start Display Routes */
Route::get('/dashboard/display/header_image', ['as'=>'admin.dashboard.header_image', 'uses'=>'DashController@header_image']);
Route::post('/dashboard/display/header_image', ['as'=>'admin.dashboard.header_image', 'uses'=>'DashController@header_image']);
Route::post('admin/header_image/add', ['as'=>'admin.header_image.add', 'uses'=>'ImageController@post_add_header_image']);
/* End Display Routes */

/* Start Testimony Route */
Route::get('/dashboard/display/testimony', ['as'=>'admin.dashboard.testimony', 'uses'=>'DashController@testimony']);
Route::post('/dashboard/display/testimony', ['as'=>'admin.dashboard.testimony', 'uses'=>'DashController@testimony']);
Route::post('admin/testimony/add', ['as'=>'admin.testimony.add', 'uses'=>'ImageController@post_add_testimony']);
/* End Testimony Routes */


/* Start Admin Route */
Route::get('/dashboard', ['as'=>'admin.dashboard', 'uses'=>'DashController@index']);
Route::get('/dashboard/calender', ['as'=>'admin.dashboard.calender', 'uses'=>'DashController@calender']);
/* Start form route */
Route::get('/dashboard/forms/course', ['as'=>'admin.dashboard.course', 'uses'=>'DashController@courses']);
Route::post('/dashboard/forms/course', ['as'=>'admin.dashboard.course', 'uses'=>'DashController@courses']);
Route::post('admin/course/add', ['as'=>'admin.course.add', 'uses'=>'ImageController@post_add_course']);

Route::get('/dashboard/forms/event', ['as'=>'admin.dashboard.event', 'uses'=>'DashController@events']);
Route::post('/dashboard/forms/event', ['as'=>'admin.dashboard.event', 'uses'=>'DashController@events']);
Route::post('admin/event/add', ['as'=>'admin.event.add', 'uses'=>'ImageController@post_add_event']);

Route::get('/dashboard/forms/news', ['as'=>'admin.dashboard.news', 'uses'=>'DashController@news']);
Route::post('/dashboard/forms/news', ['as'=>'admin.dashboard.news', 'uses'=>'DashController@news']);
Route::post('admin/news/add', ['as'=>'admin.news.add', 'uses'=>'ImageController@post_add_news']);

Route::get('/dashboard/forms/lecturer', ['as'=>'admin.dashboard.lecturer', 'uses'=>'DashController@lecturers']);
Route::post('/dashboard/forms/lecturer', ['as'=>'admin.dashboard.lecturer', 'uses'=>'DashController@lecturers']);
Route::post('admin/lecturer/add', ['as'=>'admin.lecturer.add', 'uses'=>'ImageController@post_add_lecturer']);

Route::get('/dashboard/form/blog', ['as'=>'admin.dashboard.blog', 'uses'=>'DashController@blog']);
Route::post('/dashboard/form/blog', ['as'=>'admin.dashboard.blog', 'uses'=>'DashController@blog']);
Route::post('admin/blog/add', ['as'=>'admin.blog.add', 'uses'=>'ImageController@post_add_blog']);

Route::get('/dashboard/table/testimony', ['as'=>'admin.dashboard.table.testimony', 'uses'=>'DashController@table_testimony']);

Route::get('/dashboard/display/messages', ['as'=>'admin.dashboard.table.messages', 'uses'=>'DashController@messages']);

/* End form routes */

/* End Admin routes */
//Token expiration
Route::get('refresh-csrf', function(){
    return csrf_token();
});
