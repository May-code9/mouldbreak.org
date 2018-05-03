@extends('layouts.public.base')
@section('content')
<div id="main-content">
  <section class="content-area">
    <div class="top_site_main" style="color: #ffffff;background-image:url('wp-content/themes/eduma/images/{{$aboutImage[$i]->display_image}}');">
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>About Us</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-wrapper">
      <div class="container">
        <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs" class="breadcrumbs">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{route('public_home')}}" title="Home">
              <span itemprop="name">Home</span>
            </a>
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name" title="About Us"> About Us</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content no-padding-top">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-2901" class="post-2901 page type-page status-publish hentry">
            <div class="entry-content">
              <div id="pl-2901"  class="panel-layout" >
                <div id="pg-2901-0"  class="panel-grid panel-no-style" >
                  <div id="pgc-2901-0-0"  class="panel-grid-cell" >
                    <div id="panel-2901-0-0-0" class="so-panel widget widget_heading panel-first-child panel-last-child" data-index="0" >
                      <div class="panel-widget-style panel-widget-style-for-2901-0-0-0" >
                        <div class="thim-widget-heading thim-widget-heading-base">
                          <div class="sc_heading text-center">
                            <h3 class="title">Our Story</h3>
                            <p class="sub-heading" style="">It is a long established fact that a reade.</p>
                            <span class="line"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pg-2901-1"  class="panel-grid panel-no-style" >
                  <div id="pgc-2901-1-0"  class="panel-grid-cell" >
                    <div id="panel-2901-1-0-0" class="so-panel widget widget_counters-box panel-first-child panel-last-child" data-index="1" >
                      <div class="thim-widget-counters-box thim-widget-counters-box-base">
                        <div class="counter-box  about-us" style="">
                          <div class="content-box-percentage">
                            <div class="display-percentage" data-percentage="55000">55000</div>
                            <div class="counter-content-container">
                              <div class="counter-box-content">Foreign Followers</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pgc-2901-1-1"  class="panel-grid-cell" >
                    <div id="panel-2901-1-1-0" class="so-panel widget widget_counters-box panel-first-child panel-last-child" data-index="2" >
                      <div class="thim-widget-counters-box thim-widget-counters-box-base">
                        <div class="counter-box  about-us" style="">
                          <div class="content-box-percentage">
                            <div class="display-percentage" data-percentage="60">60</div>
                            <div class="counter-content-container">
                              <div class="counter-box-content">Certified Teachers</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pgc-2901-1-2"  class="panel-grid-cell" >
                    <div id="panel-2901-1-2-0" class="so-panel widget widget_counters-box panel-first-child panel-last-child" data-index="3" >
                      <div class="thim-widget-counters-box thim-widget-counters-box-base">
                        <div class="counter-box  about-us" style="">
                          <div class="content-box-percentage">
                            <div class="display-percentage" data-percentage="2240">2240</div>
                            <div class="counter-content-container">
                              <div class="counter-box-content">Students Enrolled</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="pgc-2901-1-3"  class="panel-grid-cell" >
                    <div id="panel-2901-1-3-0" class="so-panel widget widget_counters-box panel-first-child panel-last-child" data-index="4" >
                      <div class="thim-no-border panel-widget-style panel-widget-style-for-2901-1-3-0" >
                        <div class="thim-widget-counters-box thim-widget-counters-box-base">
                          <div class="counter-box  about-us" style="">
                            <div class="content-box-percentage">
                              <div class="display-percentage" data-percentage="215">215</div>
                              <div class="counter-content-container">
                                <div class="counter-box-content">Complete Courses</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pg-2901-2"  class="panel-grid panel-no-style" >
                  <div id="pgc-2901-2-0"  class="panel-grid-cell" >
                    <div id="panel-2901-2-0-0" class="so-panel widget widget_gallery-images panel-first-child" data-index="5" >
                      <div class="thim-widget-gallery-images thim-widget-gallery-images-base">
                        <div class="thim-carousel-wrapper gallery-img " data-visible="1" data-itemtablet="1" data-itemmobile="1" data-pagination="1">
                          <div class="item">
                            <img src ="{{asset('wp-content/uploads/sites/39/2015/11/slider-3.jpg')}}" width="1170" height="550" alt=""/>
                          </div>
                          <div class="item">
                            <img src ="{{asset('wp-content/uploads/sites/39/2015/11/slider-2.jpg')}}" width="1170" height="550" alt=""/>
                          </div>
                          <div class="item">
                            <img src ="{{asset('wp-content/uploads/sites/39/2015/11/slider-1.jpg')}}" width="1170" height="550" alt=""/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="panel-2901-2-0-1" class="so-panel widget widget_text panel-last-child" data-index="6" >
                      <div class="textwidget">
                        <div class="thim-about-us-quote">
                          <p>“Cras tristique turpis justo, eu consequat sem adipiscing ut. Donec posuere bibendum metus.”</p>
                          <div class="agency">Tony Nguyen, Co-Founder</div><hr>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pg-2901-3"  class="panel-grid panel-no-style" >
                  <div id="pgc-2901-3-0"  class="panel-grid-cell" >
                    <div id="panel-2901-3-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="7" >
                      <h3 class="widget-title">Who We Are</h3>
                      <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent
                        vulputate a elit ac mollis. In sit amet ipsum turpis. Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida. <br><br> Donec iaculis adipiscing neque, non congue massa euismod quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                      </div>
                    </div>
                    <div id="pgc-2901-3-1"  class="panel-grid-cell panel-grid-cell-empty" ></div>
                    <div id="pgc-2901-3-2"  class="panel-grid-cell" >
                      <div id="panel-2901-3-2-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="8" >
                        <h3 class="widget-title">What We Do</h3>
                        <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis eros lobortis, vestibulum turpis ac, pulvinar odio. Praesent
                          vulputate a elit ac mollis. In sit amet ipsum turpis. <br><br> Pellentesque venenatis, libero vel euismod lobortis, mi metus luctus augue, eget dapibus elit nisi eu massa. Phasellus sollicitudin nisl posuere nibh ultricies, et fringilla dui gravida.  Donec iaculis adipiscing neque, non congue massa euismod quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                        </div>
                      </div>
                    </div>
                    <div id="pg-2901-4"  class="panel-grid panel-has-style" >
                      <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-2901-4" data-siteorigin-parallax="{&quot;backgroundUrl&quot;:&quot;https:\/\/educationwp.thimpress.com\/demo-university-4\/wp-content\/uploads\/sites\/39\/2015\/11\/bg-parallax-about-us.jpg&quot;,&quot;backgroundSize&quot;:[1600,650],&quot;backgroundSizing&quot;:&quot;scaled&quot;,&quot;limitMotion&quot;:&quot;auto&quot;}" data-stretch-type="full" >
                        <div id="pgc-2901-4-0"  class="panel-grid-cell panel-grid-cell-empty" ></div>
                      </div>
                    </div>
                    <div id="pg-2901-5"  class="panel-grid panel-no-style" >
                      <div id="pgc-2901-5-0"  class="panel-grid-cell" >
                        <div id="panel-2901-5-0-0" class="so-panel widget widget_heading panel-first-child panel-last-child" data-index="9" >
                          <div class="thim-widget-heading thim-widget-heading-base">
                            <div class="sc_heading text-center">
                              <h3 class="title">Meet Our Team</h3>
                              <p class="sub-heading" style="">Plugins your themes with even more features.</p>
                              <span class="line"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="pg-2901-6"  class="panel-grid panel-no-style" >
                      <div id="pgc-2901-6-0"  class="panel-grid-cell" >
                        <div id="panel-2901-6-0-0" class="so-panel widget widget_our-team panel-first-child panel-last-child" data-index="10" >
                          <div class="thim-widget-our-team thim-widget-our-team-base">
                            <div class="wrapper-lists-our-team ">
                              <a class="join-our-team" href="#" title="Join Our Team">Join Our Team</a>
                              <div class="row">
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-7-200x200.jpg')}}" alt="team-7" title="team-7"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-dribbble"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="{{route('public_team')}}">Belinda</a>
                                    </h4>
                                    <div class = "regency">Js Developer</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-3-200x200.jpg')}}" alt="team-3" title="team-3"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/christian/">Christian</a>
                                    </h4>
                                    <div class = "regency">Creative Director</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-5-200x200.jpg')}}" alt="team-5" title="team-5"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/robert/">Robert</a>
                                    </h4>
                                    <div class = "regency">Office Manager</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-6-200x200.jpg')}}" alt="team-6" title="team-6"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/tony-teo/">Tony Teo</a>
                                    </h4>
                                    <div class = "regency">Support Manager</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-2-200x200.jpg')}}" alt="team-2" title="team-2"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/jonathan/">Jonathan</a>
                                    </h4>
                                    <div class = "regency">Art Director</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/2015/11/team-1-200x200.jpg')}}" alt="team-1" title="team-1"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/john-doe/">John Doe</a>
                                    </h4>
                                    <div class = "regency">Web Developer</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/sites/39/2015/11/team-8-200x200.jpg')}}" alt="team-8" title="team-8"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/jane-nguyen/">Jane Nguyen</a>
                                    </h4>
                                    <div class = "regency">Copyrighter</div>
                                  </div>
                                </div>
                                <div class="our-team-item col-sm-3">
                                  <div class="our-team-image">
                                    <img src="{{asset('wp-content/uploads/sites/39/2015/11/team-4-200x200.jpg')}}" alt="team-4" title="team-4"  width="200" height="200">
                                    <div class="social-team">
                                      <a href="#"><i class="fa fa-facebook"></i></a>
                                      <a href="#"><i class="fa fa-twitter"></i></a>
                                      <a href="#"><i class="fa fa-skype"></i></a>
                                      <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                  </div>
                                  <div class="content-team">
                                    <h4 class="title">
                                      <a href="https://educationwp.thimpress.com/demo-university-4/our_team/ryze-faker/">Ryze Faker</a>
                                    </h4>
                                    <div class = "regency">Co-Founder</div>
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
              </article>
            </main>
          </div>
        </div>
      </section>
      @endsection
