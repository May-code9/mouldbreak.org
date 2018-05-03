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

    <div class="col-md-12">
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
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Add Company</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.center.add') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('center_name') ? ' has-error' : '' }}">
                  <label>Company Name</label>
                  <input type="text" class="form-control" name="center_name" id="company_name" value="{{ old('center_name') }}" placeholder="Enter ..." required/>
                  @if ($errors->has('center_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('center_name') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('center_address') ? ' has-error' : '' }}">
                  <label>Company Address</label>
                  <textarea class="form-control" rows="3" name="center_address" id="center_address" value="{{ old('center_address') }}" placeholder="Enter ..." required></textarea>
                  @if ($errors->has('center_address'))
                  <span class="help-block">
                    <strong>{{ $errors->first('center_address') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('center_slogan') ? ' has-error' : '' }}">
                  <label>Company Slogan</label>
                  <textarea class="form-control" rows="3" name="center_slogan" id="center_slogan" placeholder="Enter ..." required></textarea>
                  @if ($errors->has('center_slogan'))
                  <span class="help-block">
                    <strong>{{ $errors->first('center_slogan') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('created_at') ? ' has-error' : '' }}">
                  <label>Date masks:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="created_at" id="created_at" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required/>
                    @if ($errors->has('created_at'))
                    <span class="help-block">
                      <strong>{{ $errors->first('created_at') }}</strong>
                    </span>
                    @endif
                  </div><!-- /.input group -->
                </div><!-- /.form group -->

                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                  <label>Phone Number</label>
                  <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Enter ..." required/>
                  @if ($errors->has('phone_number'))
                  <span class="help-block">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="exampleInputEmail1">Email address</label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter ..." required>
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

              </div>

              <div class="box-footer">
                <button type="submit" name="add_company" class="btn btn-primary">Add</button>
                <button type="submit" name="delete_company" class="btn btn-primary">Delete</button>
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
