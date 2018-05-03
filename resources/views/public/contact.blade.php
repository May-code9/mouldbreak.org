@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($contactImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url('wp-content/themes/eduma/images/{{$contactImage[$i]->display_image}}');">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-wrapper">
      <div class="container">
        <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs" class="breadcrumbs">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ route('public_home') }}" title="Home">
              <span itemprop="name">Home</span>
            </a>
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name" title="Contact"> Contact</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content no-padding-top">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-87" class="post-87 page type-page status-publish hentry pmpro-has-access">
            <div class="entry-content">
              <div id="pl-87"  class="panel-layout" >
                <div id="pg-87-0"  class="panel-grid panel-no-style" >
                  <div id="pgc-87-0-0"  class="panel-grid-cell" >
                    <div id="panel-87-0-0-0" class="so-panel widget widget_heading panel-first-child" data-index="0" >
                      <div class="panel-widget-style panel-widget-style-for-87-0-0-0" >
                        <div class="thim-widget-heading thim-widget-heading-base">
                          <div class="sc_heading text-left">
                            <h3 class="title">Contact Info</h3>
                            <p class="sub-heading" style="">Welcome to our Website. We are glad to have you around.</p>
                            <span class="line"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="panel-87-0-0-1" class="so-panel widget widget_siteorigin-panels-builder" data-index="1" >
                      <div class="thim-border-top panel-widget-style panel-widget-style-for-87-0-0-1" >
                        <div id="pl-w58292b77794b7"  class="panel-layout" >
                          <div id="pg-w58292b77794b7-0"  class="panel-grid panel-no-style" >
                            <div id="pgc-w58292b77794b7-0-0"  class="panel-grid-cell" >
                              <div id="panel-w58292b77794b7-0-0-0" class="so-panel widget widget_icon-box panel-first-child panel-last-child" data-index="0" >
                                <div class="thim-widget-icon-box thim-widget-icon-box-base">
                                  <div class="wrapper-box-icon text-left contact_info " >
                                    <div class="smicon-box iconbox-left">
                                      <div class="boxes-icon" style="width: 30px;height: 30px;">
                                        <span class="inner-icon">
                                          <span class="icon"><i class="fa fa-phone" style="color:#ffb606; font-size:24px; line-height:24px; vertical-align: middle;"></i></span>
                                        </span>
                                      </div>
                                      <div class="content-inner"  style="width: calc( 100% - 30px - 15px);">
                                        <div class="sc-heading article_heading">
                                          <h3 class = "heading__primary" >Phone</h3>
                                        </div>
                                        <div class="desc-icon-box">
                                          <div class="desc-content" > 0812 076 7466 | 0818 843 7385</div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="panel-87-0-0-2" class="so-panel widget widget_icon-box" data-index="2" >
                      <div class="thim-border-top panel-widget-style panel-widget-style-for-87-0-0-2" >
                        <div class="thim-widget-icon-box thim-widget-icon-box-base">
                          <div class="wrapper-box-icon text-left contact_info " >
                            <div class="smicon-box iconbox-left">
                              <div class="boxes-icon" style="width: 30px;height: 30px;">
                                <span class="inner-icon">
                                  <span class="icon"><i class="fa fa-map-marker" style="color:#ffb606; font-size:24px; line-height:24px; vertical-align: middle;"></i></span>
                                </span>
                              </div>
                              <div class="content-inner"  style="width: calc( 100% - 30px - 15px);">
                                <div class="sc-heading article_heading">
                                  <h3 class = "heading__primary" >Address</h3>
                                </div>
                                <div class="desc-icon-box">
                                  <div class="desc-content" >No. 12, Mbonu street, D-Line, Port Harcourt</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="panel-87-0-0-3" class="so-panel widget widget_social panel-last-child" data-index="3" >
                      <div class="thim-border-top panel-widget-style panel-widget-style-for-87-0-0-3" >
                        <div class="thim-widget-social thim-widget-social-base">
                          <div class="thim-social">
                            <ul class="social_link">
                              <li>
                                <a class="facebook hasTooltip" href="https://www.facebook.com/mouldbreak/" target="_self"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li>
                                <a class="twitter hasTooltip" href="https://twitter.com/mouldbreaklive" target="_self" ><i class="fa fa-twitter"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pgc-87-0-1"  class="panel-grid-cell panel-grid-cell-empty" ></div>
                  <div id="pgc-87-0-2"  class="panel-grid-cell" >
                    <div id="panel-87-0-2-0" class="so-panel widget widget_heading panel-first-child" data-index="4" >
                      <div class="panel-widget-style panel-widget-style-for-87-0-2-0" >
                        <div class="thim-widget-heading thim-widget-heading-base">
                          <div class="sc_heading text-left">
                            <h3 class="title">Send A Message</h3>
                            <p class="sub-heading" style="">Your email address will not be published. Required fields are marked.</p>
                            <span class="line"></span>
                          </div>
                        </div>
                      </div>
                    </div>

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

                    <div id="panel-87-0-2-1" class="so-panel widget widget_text panel-last-child" data-index="5" >

                        <div class="screen-reader-response"></div>
                        <form id="loginform" action="{{ route('message.contact') }}" method="post">
                          {{ csrf_field() }}

                          <p class="{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name *" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                          </label>
                        </p>
                        <p class="{{ $errors->has('email') ? ' has-error' : '' }}">
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email *" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                          <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                          @endif
                        </label>
                      </p>
                      <p class="{{ $errors->has('subject') ? ' has-error' : '' }}">
                        <input id="subject" type="text" class="form-control" name="subject" placeholder="Subject *" value="{{ old('subject') }}" required autofocus>

                        @if ($errors->has('subject'))
                        <span class="help-block">
                          <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                        @endif
                      </label>
                    </p>
                    <p class="{{ $errors->has('content') ? ' has-error' : '' }}">
                      <textarea id="content" name="content" cols="120" rows="10" class="form-control" placeholder="   Message *" required></textarea>

                      @if ($errors->has('content'))
                      <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                      </span>
                      @endif
                    </label>
                  </p>

                  <p>
                    <input type="submit" value="Submit" class="button button-primary button-large" />
                  </p>
                  <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>

            </div>
          </div>
        </div>
        <div id="pg-87-1"  class="panel-grid panel-has-style" >
          <div class="thim-bg-overlay text-center siteorigin-panels-stretch panel-row-style panel-row-style-for-87-1" data-stretch-type="full" style="background-image:url({{asset('wp-content/uploads/2015/10/contact.jpg')}})!important;" >
            <div id="pgc-87-1-0"  class="panel-grid-cell" >
              <div id="panel-87-1-0-0" class="so-panel widget widget_heading panel-first-child" data-index="6" >
                <div class="panel-widget-style panel-widget-style-for-87-1-0-0" >
                  <div class="thim-widget-heading thim-widget-heading-base">
                    <div class="sc_heading text-center">
                      <h3 style="color:#ffffff;" class="title">Subscribe To Our News</h3>
                      <span style="background-color:#ffffff" class="line"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="panel-87-1-0-1" class="so-panel widget widget_text panel-last-child" data-index="7" >
                <div class="textwidget">
                  <script type="text/javascript">(function() {
                    if (!window.mc4wp) {
                      window.mc4wp = {
                        listeners: [],
                        forms    : {
                          on: function (event, callback) {
                            window.mc4wp.listeners.push({
                              event   : event,
                              callback: callback
                            });
                          }
                        }
                      }
                    }
                  })();
                  </script>
                  <form id="mc4wp-form-3" class="mc4wp-form mc4wp-form-3101 mc4wp-form-basic" method="post" data-id="3101" data-name="Default sign-up form" >
                    {{ csrf_field() }}
                    <div class="mc4wp-form-fields">
                      <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email here" required />
                      <input type="submit" value="Subscribe" disabled />

                    </div>
                    <div class="mc4wp-response"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pg-87-2"  class="panel-grid panel-no-style" >
          <div id="pgc-87-2-0"  class="panel-grid-cell" >
            <div id="panel-87-2-0-0" class="so-panel widget widget_heading panel-first-child panel-last-child" data-index="8" >
              <div class="thim-widget-heading thim-widget-heading-base">
                <div class="sc_heading text-left">
                  <h3 class="title">Location on map</h3>
                  <span class="line"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pg-87-3"  class="panel-grid panel-has-style" >
          <div class="siteorigin-panels-stretch thim-fix-stretched panel-row-style panel-row-style-for-87-3" data-stretch-type="full-stretched" >
            <div id="pgc-87-3-0"  class="panel-grid-cell" >
              <div id="panel-87-3-0-0" class="so-panel widget widget_google-map panel-first-child panel-last-child" data-index="9" >
                <div class="thim-widget-google-map thim-widget-google-map-base">
                  <div class="kcf-module">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.8203010475236!2d7.002882414477511!3d4.800886296513576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce9e62c600c7%3A0x8386d80161f5c4!2sMbonu+Street%2C+Ogbunabali%2C+Port+Harcourt!5e0!3m2!1sen!2sng!4v1501661005455" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
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
