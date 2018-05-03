@extends('layouts.public.base')
@section('content')
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($loginImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/'. $loginImage[$i]->display_image)}});">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container"><h1>Login</h1></div>
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
                      window.location.href = 'https://educationwp.thimpress.com/account/?option=getmosociallogin&app_name=' + app_name;
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
                          <h2 class="title">Login with your site account</h2>
                          <form class="" id="loginform" role="form" name="loginform" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <p class="login-username{{ $errors->has('email') ? ' has-error' : '' }}">
                              <input type="email" class="input" placeholder="Email" name="email" value="{{ old('email') }}" size="20" required autofocus>

                              @if ($errors->has('email'))
                              <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                              @endif
                            </label>
                          </p>

                          <p class="login-password{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="input" placeholder="Password" name="password" size="20" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                          </label>
                        </p>

                        <a class="lost-pass-link" href="{{ route('password.request') }}">
                          Forgot Your Password?
                        </a>

                        <p class="forgetmenot login-remember">
                          <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                          </label>
                        </p>

                        <p class="submit login-submit">
                          <input type="submit" name="wp-submit" id="wp-submit" class="button-primary button-large" style="background-color: #ffb606" value="Login" />
                        </p>

                      </form>
                      <p class="link-bottom">Not a member yet? <a href="{{route('register')}}">Register now</a>
                      </p>
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
