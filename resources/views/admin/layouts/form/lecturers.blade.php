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
      <div class = "alert alert-success">
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
              <h3 class="box-title">Add Lecturer</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.lecturer.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('lecturer_name') ? ' has-error' : '' }}">
                  <label>Lecturer Name</label>
                  <input type="text" class="form-control" name="lecturer_name" id="lecturer_name" value="{{ old('lecturer_name') }}" placeholder="Enter ..." />
                  @if ($errors->has('lecturer_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('lecturer_name') }}</strong>
                  </span>
                  @endif
                </div>
                
                <div class="form-group{{ $errors->has('lecturer_details') ? ' has-error' : '' }}">
                  <label>Lecturer Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="lecturer_details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('lecturer_details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('lecturer_details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('school') ? ' has-error' : '' }}">
                  <label>School</label>
                  <input type="text" class="form-control" name="school" id="school" value="{{ config('app.name') }}" placeholder="Enter ..." />
                  @if ($errors->has('school'))
                  <span class="help-block">
                    <strong>{{ $errors->first('school') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('facebook_add') ? ' has-error' : '' }}">
                  <label>Facebook Handle</label>
                  <input type="text" class="form-control" name="facebook_add" id="facebook_add" value="{{ old('facebook_add') }}" placeholder="Enter ..." />
                  @if ($errors->has('facebook_add'))
                  <span class="help-block">
                    <strong>{{ $errors->first('facebook_add') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('twitter_add') ? ' has-error' : '' }}">
                  <label>Twitter Handle</label>
                  <input type="text" class="form-control" name="twitter_add" id="twitter_add" value="{{ old('twitter_add') }}" placeholder="Enter ..." />
                  @if ($errors->has('twitter_add'))
                  <span class="help-block">
                    <strong>{{ $errors->first('twitter_add') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('linkedin_add') ? ' has-error' : '' }}">
                  <label>LinkedIn</label>
                  <input type="text" class="form-control" name="linkedin_add" id="linkedin_add" value="{{ old('linkedin_add') }}" placeholder="Enter ..." />
                  @if ($errors->has('linkedin_add'))
                  <span class="help-block">
                    <strong>{{ $errors->first('linkedin_add') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('team_display') ? ' has-error' : '' }}">
                  <label>Lecturer Display</label>
                  <input type="file" name="lecturer_display" id="lecturer_display" value="{{ old('lecturer_display') }}" >
                  <p style="padding-left:10px">Image Size: 200x200</p>
                  @if ($errors->has('team_display'))
                  <span class="help-block">
                    <strong>{{ $errors->first('team_display') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="box-footer">
                <input type = "submit" name = "add_lecturer" value = "Add" class = "btn btn-success" />
                <input type = "submit" name = "delete_lecturer" value = "Delete" class = "btn btn-success" style="float:right"/>
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
