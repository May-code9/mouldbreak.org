@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.leftbar')

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forms</li>
      </ol>
    </section>

    <div class="col-md-8 col-md-push-2" style="padding-left:0px">
      @if(session('success_status'))
      <div class = "alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        {{session('success_status')}}
      </div>
      @endif

      @if(session('failure_status'))
      <div class = "alert alert-danger">
        <i class="fa fa-check"></i>
        {{session('failure_status')}}
      </div>
      @endif
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-push-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Add Course</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="{{ route('admin.course.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('course_title') ? ' has-error' : '' }}">
                  <label>Course Title</label>
                  <input type="text" class="form-control" name="course_title" id="course_title" value="{{ old('course_title') }}" placeholder="Enter ..." />
                  @if ($errors->has('course_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('course_details') ? ' has-error' : '' }}">
                  <label>Course Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="course_details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('course_details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('course_lecturer') ? ' has-error' : '' }}">
                  <label>Course Lecturer </label>
                  <input type="text" class="form-control" name="course_lecturer" id="course_lecturer" placeholder="Enter ..." />
                  @if ($errors->has('course_lecturer'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_lecturer') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('facebook_add') ? ' has-error' : '' }}">
                  <label>Facebook Address </label>
                  <input type="text" class="form-control" name="facebook_add" id="facebook_add" placeholder="Enter ..." />
                  @if ($errors->has('facebook_add'))
                  <span class="help-block">
                    <strong>{{ $errors->first('facebook_add') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('course_link') ? ' has-error' : '' }}">
                  <label>Course Link to Cloud</label>
                  <input type="text" class="form-control" name="course_link" id="course_link" placeholder="https://courselink/address" />
                  @if ($errors->has('course_link'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_link') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                  <label>Date masks:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="created_at" id="created_at" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask />
                    @if ($errors->has('created_at'))
                    <span class="help-block">
                      <strong>{{ $errors->first('created_at') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group{{ $errors->has('course_display') ? ' has-error' : '' }}">
                  <label>Course Display</label>
                  <input type="file" name="course_display" id="course_display" value="{{ old('course_display') }}">
                  <p style="padding-left:10px">Image Size: 400x250</p>
                  @if ($errors->has('course_display'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_display') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('course_display') ? ' has-error' : '' }}">
                  <label>Lecturer Image</label>
                  <input type="file" name="lecturer_image" id="lecturer_image" value="{{ old('lecturer_image') }}">
                  <p style="padding-left:10px">Image Size: 40x40</p>
                  @if ($errors->has('lecturer_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('lecturer_image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-12">
                <input type = "submit" name = "add_course" value = "Add" class = "btn btn-success" />
                <input type = "submit" name = "delete_course" value = "Delete" class = "btn btn-success" style="float:right"/>
              </div>
            </form>
          </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->

      </div>   <!-- /.row -->
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

@endsection
