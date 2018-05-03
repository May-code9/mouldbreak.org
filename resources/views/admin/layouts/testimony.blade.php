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

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="text-align:center">
              <h4 >To Approve a Testimony, type in the Id number of the Testimony, and select Role 1. Click the Approve Button</h4>
              <h4 >To Delete a Testimony, type in the Id number of the Testimony. Click the Delete Button</h4>
              <h5 >Only Approved Testimonies will show on The Home Page </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-push-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Add/Edit Testimonies</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.testimony.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                  <label>Id</label>
                  <input type="text" class="form-control" name="id" id="id" value="{{ old('id') }}" placeholder="Enter ..." />
                  @if ($errors->has('id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('id') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                  <label>Fullname </label>
                  <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter ..." />
                  @if ($errors->has('fullname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('fullname') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('testimony') ? ' has-error' : '' }}">
                  <label>Testinomy</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="testimony" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('testimony'))
                  <span class="help-block">
                    <strong>{{ $errors->first('testimony') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                  <label>Role</label>
                  <select id="role" type="text" class="form-control" name="role">
                    <option value = "default">--- Select Role ---</option>
                    <option value = "0">0</option>
                    <option value = "1">1</option>
                  </select>
                  @if ($errors->has('timeline'))
                  <span class="help-block">
                    <strong>{{ $errors->first('timeline') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                  <label>Date:</label>
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
                <div class="box-footer">
                  <input type = "submit" name = "add_testimony" value = "Add" class = "btn btn-success" />
                  <input type = "submit" name = "approve_testimony" value = "Approve" class = "btn btn-success" />
                  <input type = "submit" name = "delete_testimony" value = "Delete" class = "btn btn-danger" style="float:right"/>
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
