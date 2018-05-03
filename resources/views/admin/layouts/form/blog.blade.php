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
              <h3 class="box-title">Add Blog</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.blog.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('blog_title') ? ' has-error' : '' }}">
                  <label>Blog Title</label>
                  <input type="text" class="form-control" name="blog_title" id="blog_title" value="{{ old('blog_title') }}" placeholder="Enter ..." />
                  @if ($errors->has('blog_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('blog_message') ? ' has-error' : '' }}">
                  <label>Blog Message</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="blog_message" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('blog_message'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_message') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('author_details') ? ' has-error' : '' }}">
                  <label>Author's Details</label>
                  <!-- tools box -->
                  <textarea id="editor2" name="author_details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('author_details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('blog_author') ? ' has-error' : '' }}">
                  <label>Writer/Author </label>
                  <input type="text" class="form-control" name="blog_author" id="blog_author" placeholder="Enter ..." />
                  @if ($errors->has('blog_author'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_author') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('blog_category') ? ' has-error' : '' }}">
                  <label>Blog Category</label>
                  <input type="text" class="form-control" name="blog_category" id="blog_category" placeholder="Enter ..." />
                  @if ($errors->has('blog_category'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_category') }}</strong>
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
                <div class="form-group{{ $errors->has('blog_image') ? ' has-error' : '' }}">
                  <label>Blog Image</label>
                  <input type="file" name="blog_image" id="blog_image" value="{{ old('blog_image') }}" >
                  <p style="padding-left:10px">Image Size: 300x153</p>
                  @if ($errors->has('blog_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_image') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('blog_image2') ? ' has-error' : '' }}">
                  <label>Blog Image 2</label>
                  <input type="file" name="blog_image2" id="blog_image2" value="{{ old('blog_image2') }}" >
                  <p style="padding-left:10px">Image Size: 763x393</p>
                  @if ($errors->has('blog_image2'))
                  <span class="help-block">
                    <strong>{{ $errors->first('blog_image2') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('author_image') ? ' has-error' : '' }}">
                  <label>Author's Image</label>
                  <input type="file" name="author_image" id="author_image" value="{{ old('author_image') }}" >
                  <p style="padding-left:10px">Image Size: 150x150</p>
                  @if ($errors->has('author_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="box-footer">
                <input type = "submit" name = "add_blog" value = "Add" class = "btn btn-success" />
                <input type = "submit" name = "delete_blog" value = "Delete" class = "btn btn-success" style="float:right"/>
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
