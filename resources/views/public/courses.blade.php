@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($coursesImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url('wp-content/themes/eduma/images/{{$coursesImage[$i]->display_image}}');">
    @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>All Courses</h1>
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
            <span itemprop="name" title="All courses">All courses</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content sidebar-right">
      <div class="row">
        <div id="lp-archive-courses">
          <main id="main" class="site-main col-sm-9 alignleft">
            <div id="thim-course-archive" class="thim-course-grid" data-cookie="grid-layout">
              @for($i = 0; $i < count($course); $i++)
              <div id="post-5428" class="course-grid-3 lpr_course post-5428 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-general pmpro-has-access course">
                <div class="course-item">
                  <div class="course-thumbnail">
                    <a href="">
                      <img src="{{asset('wp-content/uploads/2015/11/' . $course[$i]->course_display)}}" alt="{{$course[$i]->course_title}}" title="{{$course[$i]->id}}"  width="400" height="250">
                    </a>
                    <a class="course-readmore" href="{{ $course[$i]->course_link }}" target="_blank"> Go To Course</a>
                  </div>
                  <div class="thim-course-content">
                    <div class="course-author" itemscope itemtype="http://schema.org/Person">
                      <img alt="Admin bar avatar" src="{{asset('wp-content/uploads/2015/11/' . $course[$i]->lecturer_image)}}" class="avatar avatar-40 photo" height="40" width="40" />
                      <div class="author-contain">
                        <label itemprop="jobTitle">Teacher</label>
                        <div class="value" itemprop="name">
                          <a href="{{ $course[$i]->facebook_add }}" target="_blank"> {{$course[$i]->course_lecturer}} </a>
                        </div>
                      </div>
                    </div>
                    <h2 class="course-title">
                      <a href="{{ $course[$i]->course_link }}" rel="bookmark" target="_blank">{{$course[$i]->course_title}}</a>
                    </h2>
                    <div class="course-meta">
                      <div class="course-author" itemscope itemtype="http://schema.org/Person">
                        <img alt="Admin bar avatar" src="" class="avatar avatar-40 photo" height="40" width="40" />
                        <div class="author-contain">
                          <label itemprop="jobTitle">Teacher</label>
                          <div class="value" itemprop="name">
                            <a href="{{ $course[$i]->facebook_add }}" target="_blank"> {{$course[$i]->course_lecturer}} </a>
                          </div>
                        </div>
                      </div>
                      <div class="course-review">
                        <label>Review</label>
                        <div class="value">
                          <div class="review-stars-rated">
                            <ul class="review-stars">
                              <li>
                                <span class="fa fa-star-o"></span>
                              </li>
                              <li>
                                <span class="fa fa-star-o"></span>
                              </li>
                              <li>
                                <span class="fa fa-star-o"></span>
                              </li>
                              <li>
                                <span class="fa fa-star-o"></span>
                              </li>
                              <li>
                                <span class="fa fa-star-o"></span>
                              </li>
                            </ul>
                            <ul class="review-stars filled" style="width: 100%">
                              <li>
                                <span class="fa fa-star"></span>
                              </li>
                              <li>
                                <span class="fa fa-star"></span>
                              </li>
                              <li>
                                <span class="fa fa-star"></span>
                              </li>
                              <li>
                                <span class="fa fa-star"></span>
                              </li>
                              <li>
                                <span class="fa fa-star"></span>
                              </li>
                            </ul>
                          </div>
                          <span>(3 reviews)</span>
                        </div>
                      </div>
                      <div class="course-students">
                        <label>Students</label>
                        <div class="value"><i class="fa fa-group"></i> 311</div>
                      </div>
                      <div class="course-comments-count">
                        <div class="value"><i class="fa fa-comment"></i>3</div>
                      </div>
                      <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <div class="value free-course" itemprop="price"> Free</div>
                        <meta itemprop="priceCurrency" content="&#36;" />
                      </div>
                    </div>
                    <div class="course-description">
                    </div>
                    <p></p>
                    <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                      <div class="value free-course" itemprop="price"> Free</div>
                      <meta itemprop="priceCurrency" content="&#36;" />
                    </div>
                    <div class="course-readmore">
                      <a href="{{route('public_icourse')}}">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
            </div>
          </main>
          <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
            <aside id="course-categories-3" class="widget widget_course-categories">
              <div class="thim-widget-course-categories thim-widget-course-categories-base">
                <h4 class="widget-title">All Courses</h4>
                @for($i = 0; $i < count($course); $i++)
                <ul>
                  <li>
                    <a href="{{ $course[$i]->course_link }}">{{$course[$i]->course_title}}</a>
                  </li>
                </ul>
                @endfor
              </div>
            </aside>
            <aside id="courses-7" class="widget widget_courses">
              <div class="thim-widget-courses thim-widget-courses-base">
                <h4 class="widget-title">Latest Courses</h4>
                @for($i = 0; $i < count($lastCourse); $i++)
                <div class="thim-course-list-sidebar">
                  <div class="lpr_course has-post-thumbnail">
                    <div class="course-thumbnail">
                      <img src="/wp-content/uploads/2015/11/{{$lastCourse[$i]->course_display}}" alt="{{$lastCourse[$i]->course_title}}"/>
                    </div>
                    <div class="thim-course-content">
                      <h3 class="course-title">
                        <a href="{{ $lastCourse[$i]->course_link }}">{{$lastCourse[$i]->course_title}} </a>
                      </h3>
                      <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <div class="value free-course" itemprop="price"> Free</div>
                        <meta itemprop="priceCurrency" content="&#36;" />
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                @endfor
              </div>
            </aside>
            <!--<aside id="single-images-7" class="widget widget_single-images">
              <div class="thim-widget-single-images thim-widget-single-images-base">
                <div class="single-image text-left">
                  <a href="#">
                    <img src ="https://3ek5k1tux0822q3g83e30fye-wpengine.netdna-ssl.com/wp-content/uploads/2015/12/ad.jpg" width="330" height="359" alt=""/>
                  </a>
                </div>
              </div>
            </aside>-->

          </div>
        </div>
      </div>
    </section>
    @endsection
