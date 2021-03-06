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
        {{session('success_status')}}
      </div>
      @endif

      @if(session('failure_status'))
      <div class = "alert alert-danger">
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
            <form role="form" method="post" action="{{ route('admin.header_image.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('display_image') ? ' has-error' : '' }}">
                  <label>Large Display Image</label>
                  <input type="file" name="display_image" id="display_image" value="{{ old('display_image') }}" required>
                  <p style="padding-left:10px">Image Size: 1920x500</p>
                  @if ($errors->has('display_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('display_image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            <div class="box-footer">
              <input type = "submit" name = "add_image" value = "Add" class = "btn btn-success" />
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
