
<header id="masthead" class="site-header affix-top bg-custom-sticky sticky-header header_overlay header_v1">
  <div id="toolbar" class="toolbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="toolbar-container">
            <aside id="text-2" class="widget widget_text">
              <div class="textwidget">
                <div class="thim-have-any-question"> Have any question?
                  <div class="mobile"><i class="fa fa-phone"></i>
                    <a href="call:+234 812 076 7466" class="value" >+234 812 076 7466 </a> |
                    <a href="call:+234 818 843 7385" class="value" > +234 818 843 7385</a>
                  </div>
                  <!--<div class="email"><i class="fa fa-envelope"></i>
                  <a href="#">hello@eduma.com</a>
                </div>-->
              </div>
            </div>
          </aside>
          @if(Auth::guest())
          <aside id="login-popup-3" class="widget widget_login-popup">
            <div class="thim-widget-login-popup thim-widget-login-popup-base">
              <div class="thim-link-login thim-login-popup">
                <a class="register" href="{{route('register')}}">Register</a>
                <a class="login" href="{{route('login')}}">Login</a>
              </div>
              <div id="thim-popup-login" class="has-shortcode">
                <div class="thim-login-container">
                  <script type="text/javascript">function moOpenIdLogin(app_name) {
                    window.location.href = 'https://educationwp.thimpress.com/?option=getmosociallogin&app_name=' + app_name;
                  }
                  </script>
                  <a href='http://miniorange.com/cloud-identity-broker-service' style='display:none;'></a>
                  <a href='http://miniorange.com/strong_auth' style='display:none;'></a>
                  <a href='http://miniorange.com/single-sign-on-sso' style='display:none;'></a>
                  <a href='http://miniorange.com/fraud' style='display:none;'></a>
                  <div class='mo-openid-app-icons'>
                    <p style='color:#000000'> Login with social networks</p>
                    <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-facebook btn-custom-dec login-button' onClick='moOpenIdLogin("facebook");'> <i style='padding-top:5px !important' class='fa fa-facebook'></i> Facebook</a>
                    <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-google btn-custom-dec login-button' onClick='moOpenIdLogin("google");'> <i style='padding-top:5px !important' class='fa fa-google-plus'></i> Google</a>
                    <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-twitter btn-custom-dec login-button' onClick='moOpenIdLogin("twitter");'> <i style='padding-top:5px !important' class='fa fa-twitter'></i> Twitter</a>
                    <a  style='width: 240px !important;padding-top:11px !important;padding-bottom:11px !important;margin-bottom: -1px !important;border-radius: 4px !important;' class='btn btn-block btn-social btn-linkedin btn-custom-dec login-button' onClick='moOpenIdLogin("linkedin");'> <i style='padding-top:5px !important' class='fa fa-linkedin'></i> LinkedIn</a>
                  </div> <br>
                  <div class="thim-login">
                    <h2 class="title">Login with your site account</h2>
                    <form id="loginform" role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                      <p class="login-username{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input type="email" class="input" placeholder="Username or email" name="email" value="{{ old('email') }}" size="20" required autofocus>
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
                <p class="link-bottom">Not a member yet? <a class="register" href="{{route('register')}}">Register now</a></p>
              </div>
              <span class="close-popup"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
      </aside>
      @elseif (Auth::user()->role == 4)
      <aside class="widget widget_login-popup">
        <a class="login" href="{{route('admin.dashboard')}}">Dashboard</a>
      </aside>
      <aside id="login-popup-3" class="widget widget_login-popup">
        <div class="thim-widget-login-popup thim-widget-login-popup-base">
          <div class="thim-link-login thim-login-popup">
            <a class="login" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{Auth::user()->first_name}} | Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </aside>
      @else
      <aside id="login-popup-3" class="widget widget_login-popup">
        <div class="thim-widget-login-popup thim-widget-login-popup-base">
          <div class="thim-link-login thim-login-popup">
            <a class="login" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{Auth::user()->first_name}} | Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      </aside>
      @endif
    </div>
  </div>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="navigation col-sm-12">
      <div class="tm-table">
        <div class="width-logo table-cell sm-logo">
          <a href="{{route('public_home')}}" title="{{ config('app.name') }}" rel="home" class="no-sticky-logo">
            <img src="{{asset('wp-content/uploads/2015/11/logo.png')}}" alt="MouldBreak" >
          </a>
          <a href="{{route('public_home')}}" rel="home" class="sticky-logo">
            <img src="{{asset('wp-content/uploads/2015/11/logo-sticky.png')}}" alt="MouldBreak" >
          </a>
        </div>
        <nav class="width-navigation table-cell table-right">
          <ul class="nav navbar-nav menu-main-menu">
            <li id="menu-item-7679" class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-7679 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="{{route('public_home')}}" class="tc-menu-inner">Home</a>
            </li>
            <li id="menu-item-95" class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-7679 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href="{{ route('public_what') }}" class="tc-menu-inner">What is Mouldbreak</a>
              <!--<ul class="sub-menu">
                <li id="menu-item-6550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6550 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Who We Are</a></li>
                <li id="menu-item-4451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4451 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">History</a></li>
                <li id="menu-item-3437" class="menu-item menu-item-type-post_type_archive menu-item-object-forum menu-item-3437 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Growth Over the Years</a></li>
                <li id="menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2924 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Evolution of Courses</a></li>
              </ul>--><!-- End wrapper ul sub -->
            </li>
            <li id="menu-item-7682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7682 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-builder">
              <a href="{{route('public_courses')}}" class="tc-menu-inner">Courses</a>
              <div class='tc-megamenu-wrapper tc-megamenu-holder mega-sub-menu sub-menu'>
                <div id="pl-tc-megamenu-7682"  class="panel-layout" >
                  <div id="pg-tc-megamenu-7682-0"  class="panel-grid panel-has-style" >
                    <div class="thim-megamenu-row panel-row-style panel-row-style-for-tc-megamenu-7682-0" >
                      <div id="pgc-tc-megamenu-7682-0-0"  class="panel-grid-cell" >
                        <div id="panel-tc-megamenu-7682-0-0-0" class="so-panel widget widget_nav_menu panel-first-child panel-last-child" data-index="0" >
                          <h3 class="widget-title">About Courses</h3>
                          <div class="menu-about-courses-container">
                            @for($i = 0; $i < count($courseList); $i++)
                            <ul id="menu-about-courses" class="menu">
                              <li id="menu-item-7635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7635 tc-menu-item tc-menu-depth-0 tc-menu-layout-default">
                                <a href="{{ $courseList[$i]->course_link }}" class="tc-menu-inner">{{ $courseList[$i]->course_title }}</a>
                              </li>
                            </ul>
                            @endfor
                          </div>
                        </div>
                      </div>
                      <div id="pgc-tc-megamenu-7682-0-1"  class="panel-grid-cell" >
                        <div id="panel-tc-megamenu-7682-0-1-0" class="so-panel widget widget_courses panel-first-child panel-last-child" data-index="1" >
                          <div class="thim-widget-courses thim-widget-courses-base">
                            @for($i = 0; $i < count($courseMenuImage); $i++)
                            <h3 class="widget-title">New Course</h3>
                            <div class="thim-course-megamenu">
                              <div class="lpr_course course-grid-1">
                                <div class="course-item">
                                  <div class="course-thumbnail">
                                    <a href="{{ $courseMenuImage[$i]->course_link }}" >
                                      <img src="{{asset('wp-content/uploads/2015/11/' . $courseMenuImage[$i]->course_display)}}" alt="{{ $courseMenuImage[$i]->course_title }}" title="course-{{ $courseMenuImage[$i]->id }}"  width="450" height="450">
                                    </a>
                                  </div>
                                  <div class="thim-course-content">
                                    <h2 class="course-title">
                                      <a href="{{ $courseMenuImage[$i]->course_link }}"> {{ $courseMenuImage[$i]->course_title }}</a>
                                    </h2>
                                    <div class="course-meta">
                                      <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="value free-course" itemprop="price"> Free</div>
                                        <meta itemprop="priceCurrency" content="&#36;" />
                                      </div>
                                    </div>
                                    <a class="course-readmore" href="{{ $courseMenuImage[$i]->course_link }}">Get Course</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endfor
                          </div>
                        </div>
                      </div>
                      <div id="pgc-tc-megamenu-7682-0-2"  class="panel-grid-cell" >
                        <div id="panel-tc-megamenu-7682-0-2-0" class="so-panel widget widget_single-images panel-first-child panel-last-child" data-index="2" >
                          <div class="thim-widget-single-images thim-widget-single-images-base">
                            <div class="single-image text-left">
                              <a href="#">
                                <img src ="" width="252" height="359" alt=""/>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="menu-item-7679" class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-7679 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="{{ route('public_events') }}" class="tc-menu-inner">Events</a>
            </li>
            <li id="menu-item-4528" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4528 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="#" class="tc-menu-inner">Gallery</a>
            </li>
            <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="{{ route('public_blog') }}" class="tc-menu-inner">Blog</a>
            </li>
            @if(Route::currentRouteName() == "public_home")
            <li id="menu-item-7679" class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-7679 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="#testify" class="tc-menu-inner">Testify</a>
            </li>
            @endif
            <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
              <a href="{{ route('public_contact') }}" class="tc-menu-inner">Contact</a>
            </li>
            <li class="menu-right">
              <ul>
                <li id="courses-searching-3" class="widget widget_courses-searching">
                  <div class="thim-widget-courses-searching thim-widget-courses-searching-base">
                    <div class="thim-course-search-overlay">
                      <div class="search-toggle"><i class="fa fa-search"></i></div>
                      <div class="courses-searching layout-overlay">
                        <div class="search-popup-bg"></div>
                        <form method="get" action="#">
                          <input type="text" value="" name="s" placeholder="Search courses..." class="thim-s form-control courses-search-input" autocomplete="off" />
                          <input type="hidden" value="course" name="ref" />
                          <button type="submit"><i class="fa fa-search"></i></button>
                          <span class="widget-search-close"></span>
                        </form>
                        <ul class="courses-list-search list-unstyled"></ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
      </div>
    </div>
  </div>
</div>
</header>
<nav class="mobile-menu-container mobile-effect">
  <ul class="nav navbar-nav">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7682 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-builder">
      <a href="{{route('public_home')}}" class="tc-menu-inner">Home</a>
    </li>
    <li id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href="{{ route('public_what') }}"><span class="tc-menu-inner">What is Mouldbreak</span></a>
      <ul class="sub-menu">
        <li id="menu-item-6550" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6550 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Who We Are</a></li>
        <li id="menu-item-4451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4451 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">History</a></li>
        <li id="menu-item-3437" class="menu-item menu-item-type-post_type_archive menu-item-object-forum menu-item-3437 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Growth Over the Years</a></li>
        <li id="menu-item-2924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2924 tc-menu-item tc-menu-depth-1 tc-menu-align-left"><a href="" class='tc-megamenu-title' class="tc-menu-inner">Evolution of Courses</a></li>
      </ul><!-- End wrapper ul sub -->
    </li>
    <li id="menu-item-7682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7682 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-builder">
      <a href="{{route('public_courses')}}" class="tc-menu-inner">Courses</a>
      <div class='tc-megamenu-wrapper tc-megamenu-holder mega-sub-menu sub-menu'>
        <div id="pl-tc-megamenu-7682"  class="panel-layout" >
          <div id="pg-tc-megamenu-7682-0"  class="panel-grid panel-has-style" >
            <div class="thim-megamenu-row panel-row-style panel-row-style-for-tc-megamenu-7682-0" >
              <div id="pgc-tc-megamenu-7682-0-0"  class="panel-grid-cell" >
                <div id="panel-tc-megamenu-7682-0-0-0" class="so-panel widget widget_nav_menu panel-first-child panel-last-child" data-index="0" >
                  <h3 class="widget-title">About Courses</h3>
                  <div class="menu-about-courses-container">
                    @for($i = 0; $i < count($courseList); $i++)
                    <ul id="menu-about-courses" class="menu">
                      <li id="menu-item-7635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7635 tc-menu-item tc-menu-depth-0 tc-menu-layout-default">
                        <a href="{{ $courseList[$i]->course_link }}" class="tc-menu-inner">{{ $courseList[$i]->course_title }}</a>
                      </li>
                    </ul>
                    @endfor
                  </div>
                </div>
              </div>
              <div id="pgc-tc-megamenu-7682-0-1"  class="panel-grid-cell" >
                <div id="panel-tc-megamenu-7682-0-1-0" class="so-panel widget widget_courses panel-first-child panel-last-child" data-index="1" >
                  <div class="thim-widget-courses thim-widget-courses-base">
                    @for($i = 0; $i < count($courseMenuImage); $i++)
                    <h3 class="widget-title">New Course</h3>
                    <div class="thim-course-megamenu">
                      <div class="lpr_course course-grid-1">
                        <div class="course-item">
                          <div class="course-thumbnail">
                            <a href="{{ $courseMenuImage[$i]->course_link }}" >
                              <img src="{{asset('wp-content/uploads/2015/11/' . $courseMenuImage[$i]->course_display)}}" alt="{{ $courseMenuImage[$i]->course_title }}" title="course-{{ $courseMenuImage[$i]->id }}"  width="450" height="450">
                            </a>
                          </div>
                          <div class="thim-course-content">
                            <h2 class="course-title">
                              <a href="{{ $courseMenuImage[$i]->course_link }}"> {{ $courseMenuImage[$i]->course_title }}</a>
                            </h2>
                            <div class="course-meta">
                              <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <div class="value free-course" itemprop="price"> Free</div>
                                <meta itemprop="priceCurrency" content="&#36;" />
                              </div>
                            </div>
                            <a class="course-readmore" href="{{ $courseMenuImage[$i]->course_link }}">Get Course</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
              <div id="pgc-tc-megamenu-7682-0-2"  class="panel-grid-cell" >
                <div id="panel-tc-megamenu-7682-0-2-0" class="so-panel widget widget_single-images panel-first-child panel-last-child" data-index="2" >
                  <div class="thim-widget-single-images thim-widget-single-images-base">
                    <div class="single-image text-left">
                      <a href="#">
                        <img src ="" width="252" height="359" alt=""/>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-2924 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
      <a href="{{ route('public_events') }}" class="tc-menu-inner">Events</a>
    </li>
    <li class="menu-item menu-item-type-post_type_archive menu-item-object-tp_event menu-item-7679 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
      <a href="#" class="tc-menu-inner">Gallery</a>
    </li>
    <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
      <a href="{{ route('public_blog') }}" class="tc-menu-inner">Blog</a>
    </li>
    @if(Route::currentRouteName() == "public_home")
    <li id="menu-item-127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
      <a href="#testify" class="tc-menu-inner">Testify</a>
    </li>
    @endif
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
      <a href="{{ route('public_contact') }}" class="tc-menu-inner">Contact</a>
    </li>
  </ul>
</nav>
