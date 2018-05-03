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
              <h3 class="box-title">Add News</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.news.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('news_title') ? ' has-error' : '' }}">
                  <label>News Title</label>
                  <input type="text" class="form-control" name="news_title" id="news_title" value="{{ old('news_title') }}" placeholder="Enter ..." />
                  @if ($errors->has('news_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('news_title') }}</strong>
                  </span>
                  @endif
                </div>
                
                <div class="form-group{{ $errors->has('news_details') ? ' has-error' : '' }}">
                  <label>News Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="news_details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('news_details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('news_details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('news_handler') ? ' has-error' : '' }}">
                  <label>News Handler </label>
                  <input type="text" class="form-control" name="news_handler" id="news_handler" placeholder="Enter ..." />
                  @if ($errors->has('news_handler'))
                  <span class="help-block">
                    <strong>{{ $errors->first('news_handler') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('news_display') ? ' has-error' : '' }}">
                  <label>News Display</label>
                  <input type="file" name="news_display" id="news_display" value="{{ old('news_display') }}" >
                  <p style="padding-left:10px">Image Size: 450x267</p>
                  @if ($errors->has('news_display'))
                  <span class="help-block">
                    <strong>{{ $errors->first('news_display') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

            <div class="box-footer">
              <input type = "submit" name = "add_news" value = "Add" class = "btn btn-success" />
              <input type = "submit" name = "delete_news" value = "Delete" class = "btn btn-success" style="float:right"/>
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
