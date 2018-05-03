@extends('layouts.public.base')
@section('content')
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($jsregImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/'. $jsregImage[$i]->display_image)}});">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Register</h1>
        </div>
      </div>
    </div>
    
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
    
    <div class="container site-content">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-2958" class="post-2958 page type-page status-publish hentry pmpro-has-access">
            <div class="entry-content">
              <div id="pl-2958"  class="panel-layout" >
                <div id="pg-2958-1"  class="panel-grid panel-no-style" >
                  <div id="pgc-2958-1-0"  class="panel-grid-cell col-md-8 col-md-offset-2" >
                    <div id="panel-2958-1-0-0" class="so-panel widget widget_login-form panel-first-child panel-last-child" data-index="1" >
                      <div class="thim-widget-login-form thim-widget-login-form-base">
                        <div class="thim-login">
                          <h2 class="title">Joint Summit 2018 Registration</h2>
                          <form id="loginform" action="{{ route('joint.summit.register') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                              <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>

                              @if ($errors->has('first_name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                              </span>
                              @endif

                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                              <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>

                              @if ($errors->has('last_name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                              </span>
                              @endif
                            </div>
                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                              <input id="phone_number" type="text" class="form-control" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}" required>

                              @if ($errors->has('phone_number'))
                              <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                              </span>
                              @endif
                            </div>
                            <div class="form-group{{ $errors->has('whatsapp_number') ? ' has-error' : '' }}">
                              <input id="whatsapp_number" type="text" class="form-control" placeholder="Whatsapp Number" name="whatsapp_number" required>

                              @if ($errors->has('whatsapp_number'))
                              <span class="help-block">
                                <strong>{{ $errors->first('whatsapp_number') }}</strong>
                              </span>
                              @endif
                            </div>

                            <p class="submit">
                              <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Register" />
                            </p>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </main>
      </div>
    </div>
  </section>

    @if (session('alert'))
        {!! session('alert') !!}
    @endif
@endsection
