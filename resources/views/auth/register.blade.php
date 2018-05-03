@extends('layouts.public.base')
@section('content')
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($registerImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/'. $registerImage[$i]->display_image)}});">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Register</h1>
        </div>
      </div>
    </div>
    <div class="container site-content">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-2958" class="post-2958 page type-page status-publish hentry pmpro-has-access">
            <div class="entry-content">
              <div id="pl-2958"  class="panel-layout" >
                <div id="pg-2958-0"  class="panel-grid panel-no-style" >
                  <div id="pgc-2958-0-0"  class="panel-grid-cell" >
                    <script type="text/javascript">
                    function moOpenIdLogin(app_name) {
                      window.location.href = 'https://educationwp.thimpress.com/account/?action=register&option=getmosociallogin&app_name=' + app_name;
                    }
                    </script>
                    <div id="panel-2958-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0" >
                      <div class="textwidget">
                        <a href='http://miniorange.com/cloud-identity-broker-service' style='display:none;'></a>
                        <a href='http://miniorange.com/strong_auth' style='display:none;'></a>
                        <a href='http://miniorange.com/single-sign-on-sso' style='display:none;'></a>
                        <a href='http://miniorange.com/fraud' style='display:none;'></a>
                        <div class='mo-openid-app-icons'>
                          <p style='color:#000000'> Login with social networks</p>
                          <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-facebook btn-custom-dec login-button' onClick=''> <i style='padding-top:5px !important' class='fa fa-facebook'></i> Facebook</a>
                          <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-google btn-custom-dec login-button' onClick=''> <i style='padding-top:5px !important' class='fa fa-google-plus'></i> Google</a>
                          <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-twitter btn-custom-dec login-button' onClick=''> <i style='padding-top:5px !important' class='fa fa-twitter'></i> Twitter</a>
                          <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-linkedin btn-custom-dec login-button' onClick=''> <i style='padding-top:5px !important' class='fa fa-linkedin'></i> LinkedIn</a>
                        </div> <br>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pg-2958-1"  class="panel-grid panel-no-style" >
                  <div id="pgc-2958-1-0"  class="panel-grid-cell col-md-8 col-md-offset-2" >
                    <div id="panel-2958-1-0-0" class="so-panel widget widget_login-form panel-first-child panel-last-child" data-index="1" >
                      <div class="thim-widget-login-form thim-widget-login-form-base">
                        <div class="thim-login">
                          <h2 class="title">Register</h2>
                          <form id="loginform" action="{{route('register')}}" method="post">
                            {{ csrf_field() }}

                            <p class="{{ $errors->has('role') ? ' has-error' : '' }}">
                              <input id="role" type="hidden" class="form-control" name="role" value="{{ 0 }}">

                              @if ($errors->has('role'))
                              <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                              </span>
                              @endif
                              </label>
                            </p>
                            <p class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                              <input id="first_name" type="text" class="input" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>

                              @if ($errors->has('first_name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                              </span>
                              @endif
                              </label>
                            </p>
                            <p class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                              <input id="last_name" type="text" class="input" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>

                              @if ($errors->has('last_name'))
                              <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                              </span>
                              @endif
                            </p>
                            <p class="{{ $errors->has('email') ? ' has-error' : '' }}">
                              <input id="email" type="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}" required>

                              @if ($errors->has('email'))
                              <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                            </p>
                            <p class="{{ $errors->has('password') ? ' has-error' : '' }}">
                              <input id="password" type="password" class="input" placeholder="Password" name="password" required>

                              @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                              @endif
                            </p>
                            <p>
                              <input id="password-confirm" type="password" class="input" placeholder="Repeat Password" name="password_confirmation" required>
                            </p>
                            <p class="submit">
                              <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Register" />
                            </p>
                          </form>
                          <p class="link-bottom">Are you a member? <a href="{{route('login')}}">Login now</a></p>
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
@endsection
