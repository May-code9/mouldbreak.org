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
              <h3 class="box-title">Add Event</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin.event.add') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('event_title') ? ' has-error' : '' }}">
                  <label>Event Title</label>
                  <input type="text" class="form-control" name="event_title" id="event_title" value="{{ old('event_title') }}" placeholder="Enter ..." />
                  @if ($errors->has('event_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('event_details') ? ' has-error' : '' }}">
                  <label>Event Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="event_details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('event_details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('event_speaker') ? ' has-error' : '' }}">
                  <label>Event Speaker </label>
                  <input type="text" class="form-control" name="event_speaker" id="event_speaker" placeholder="Enter ..." />
                  @if ($errors->has('event_speaker'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_speaker') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('event_venue') ? ' has-error' : '' }}">
                  <label>Event Venue </label>
                  <input type="text" class="form-control" name="event_venue" id="event_venue" placeholder="Enter ..." />
                  @if ($errors->has('event_venue'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_venue') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('event_day') ? ' has-error' : '' }}">
                  <label>Event Day </label>
                  <input type="text" class="form-control" name="event_day" id="event_day" placeholder="Enter ..." />
                  @if ($errors->has('event_day'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_day') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('event_month') ? ' has-error' : '' }}">
                  <label>Event Month </label>
                  <input type="text" class="form-control" name="event_month" id="event_month" placeholder="Enter ..." />
                  @if ($errors->has('event_month'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_month') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('event_time') ? ' has-error' : '' }}">
                  <label>Event Time </label>
                  <input type="text" class="form-control" name="event_time" id="event_time" placeholder="Enter ..." />
                  @if ($errors->has('event_time'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_time') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('timeline') ? ' has-error' : '' }}">
                  <label>Timeline</label>
                  <select id="timeline" type="text" class="form-control" name="timeline">
                    <option value = "default">--- Select Timeline ---</option>
                    <option value = "Past">Past</option>
                    <option value = "Ongoing">Ongoing</option>
                    <option value = "Future">Future</option>
                    <option value = "Regular">Regular</option>
                  </select>
                  @if ($errors->has('timeline'))
                  <span class="help-block">
                    <strong>{{ $errors->first('timeline') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('event_display') ? ' has-error' : '' }}">
                  <label>Event Display</label>
                  <input type="file" name="event_display" id="event_display" value="{{ old('event_display') }}" >
                  <p style="padding-left:10px">Image Size: 450x450</p>
                  @if ($errors->has('event_display'))
                  <span class="help-block">
                    <strong>{{ $errors->first('event_display') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="box-footer">
                <input type = "submit" name = "add_event" value = "Add" class = "btn btn-success" />
                <input type = "submit" name = "delete_event" value = "Delete" class = "btn btn-success" style="float:right"/>
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
