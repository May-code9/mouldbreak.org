@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/bg-page.jpg')}});">
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h2>Blog</h2>
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
            <a itemprop="item" href="{{ route('public_blog') }}" title="Business">
              <span itemprop="name">Blog</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content sidebar-right">
      <div class="row">
        <main id="main" class="site-main col-sm-9 alignleft">
          <div class="page-content">
            @if($post)
            <article id="post-3697" class="post-3697 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-course tag-thimpress tag-wordpress pmpro-has-access">
              <div class="page-content-inner">
                <header class="entry-header">
                  <h1 class="entry-title">{{$post->blog_title}}</h1>
                  <ul class="entry-meta">
                    <li class="author">
                      <span>Posted by</span>
                      <span class="vcard author author_name">
                        <a href="">{{$post->blog_author}}</a>
                      </span>
                    </li>
                    <li class="entry-category">
                      <span>Categories</span>
                      <a href="" rel="category tag">{{$post->blog_category}}</a>
                    </li>
                    <li class="entry-date">
                      <span>Date</span>
                      <span class="value"> {{$post->created_at}}</span>
                    </li>
                  </ul>
                </header>

                <div class='post-formats-wrapper'>
                  <a class="post-image" href="">
                    <img width="870" height="445" src="{{ url('wp-content/uploads/2016/02/' . $post->blog_image2) }}" class="attachment-full size-full wp-post-image" alt="" srcset="{{ url('wp-content/uploads/2016/02/' . $post->blog_image2) }} 870w, {{ url('wp-content/uploads/2016/02/' . $post->blog_image2) }} 300w, {{ url('wp-content/uploads/2016/02/' . $post->blog_image2) }} 768w" sizes="(max-width: 870px) 100vw, 870px" />
                  </a>
                </div>
                <div class="entry-content">
                  {!!$post->blog_message!!}
                  <span class="cp-load-after-post"></span>
                </div>
                <div class="entry-tag-share">
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="thim-social-share">
                        <li class="heading">Share:</li>
                        <li>
                          <div class="facebook-social">
                            <a target="_blank" class="facebook"  href="" title="Facebook"><i class="fa fa-facebook"></i></a>
                          </div>
                        </li>

                        <li>
                          <div class="twitter-social">
                            <a target="_blank" class="twitter" href="" title="Twitter"><i class="fa fa-twitter"></i></a>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="thim-about-author">
                  <div class="author-wrapper">
                    <div class="author-avatar">
                      <img alt="Admin bar avatar" src="{{ url('wp-content/uploads/2016/03/' . $post->author_image) }}" class="avatar avatar-110 photo" height="110" width="110" />
                    </div>
                    <div class="author-bio">
                      <div class="author-top">
                        <a class="name" href=""> {{$post->blog_author}} </a>
                      </div>
                      <ul class="thim-author-social">
                        <li>
                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>

                        <li>
                          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>

                        </ul>
                      </div>
                      <div class="author-description">{!!$post->author_details!!} </div>
                    </div>
                  </div>
                  <div class="entry-navigation-post">
                    <div class="prev-post">
                      <p class="heading">Previous post</p>
                      <h5 class="title">
                        <a href="#"></a>
                      </h5>
                      <div class="date"> </div>
                    </div>
                    <div class="next-post">
                      <p class="heading">Next post</p>
                      <h5 class="title">
                        <a href="#"></a>
                      </h5>
                      <div class="date"></div>
                    </div>
                  </div>
                  <section class="related-archive">
                    <h3 class="single-title">You may also like</h3>
                    <ul class="archived-posts">
                      @for($i = 0; $i < count($randomBlog); $i++)
                      <li class="post-3696 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
                        <div class="category-posts clear">
                          <img src="{{ asset('wp-content/uploads/2016/01/' . $randomBlog[$i]->blog_image) }}" alt="{{$randomBlog[$i]->id}}" title="{{$randomBlog[$i]->id}}"  width="300" height="200">
                          <div class="rel-post-text">
                            <h5>
                              <a href="{{route('public_iblog', ['blog_title'=>$randomBlog[$i]->blog_title, 'id'=>$randomBlog[$i]->id])}}" title="$randomBlog[$i]->blog_title">{{ $randomBlog[$i]->blog_title }}</a>
                            </h5>
                            <div class="date"> {{ $randomBlog[$i]->created_at }} </div>
                          </div>
                        </div>
                      </li>
                      @endfor
                    </ul>
                  </section>
                </div>
              </article>
              @endif
            </div>
          </main>
          <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
            <!-- <aside id="search-4" class="widget widget_search">
              <h4 class="widget-title">Search</h4>
              <form role="search" method="get" class="search-form" action="https://educationwp.thimpress.com/">
                <label>
                  <span class="screen-reader-text">Search for:</span>
                  <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
              </form>
            </aside> -->
            <aside id="categories-2" class="widget widget_categories">
              <h4 class="widget-title">Blog List</h4>
              <ul>
                @for($i = 0; $i < count($blogOrder); $i++)
                <li class="cat-item cat-item-9">
                  <a href="{{ route('public_iblog', ['blog_title'=>$blogOrder[$i]->blog_title, 'id'=>$blogOrder[$i]->id]) }}" >{{ $blogOrder[$i]->blog_title }}</a>
                </li>
                @endfor
                  </ul>
                </aside>
                <aside id="courses-6" class="widget widget_courses">
                  <div class="thim-widget-courses thim-widget-courses-base">
                    <h4 class="widget-title">Latest Blogs</h4>
                    <div class="thim-course-list-sidebar">
                      @for($i = 0; $i < count($blogLatest); $i++)
                      <div class="lpr_course has-post-thumbnail">
                        <div class="course-thumbnail">
                          <img src="{{ asset('wp-content/uploads/2016/01/' . $blogLatest[$i]->blog_image) }}" alt="{{ $blogLatest[$i]->blog_title }}"/>
                        </div>
                        <div class="thim-course-content">
                          <h3 class="course-title">
                            <a href="{{ route('public_iblog', ['blog_title'=>$blogLatest[$i]->blog_title, 'id'=>$blogLatest[$i]->id]) }}"> {{ $blogLatest[$i]->blog_title }}</a>
                          </h3>
                          <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <div class="value free-course" itemprop="price"> Free</div>
                            <meta itemprop="priceCurrency" content="&#36;" />
                          </div>
                        </div>
                      </div>
                      @endfor
                    </div>
                  </aside>

                  <aside id="list-post-8" class="widget widget_list-post">
                    <div class="thim-widget-list-post thim-widget-list-post-base">
                      <h4 class="widget-title">Latest Courses</h4>
                      <div class="thim-list-posts sidebar">
                        @for($i = 0; $i < count($lastCourse); $i++)
                        <div class="item-post post-3698 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
                          <div class="article-image">
                            <img width="150" height="150" src="{{ asset('wp-content/uploads/2015/11/' . $lastCourse[$i]->course_display) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="{{ asset('wp-content/uploads/2015/11/' . $lastCourse[$i]->course_display) }} 150w, {{ asset('wp-content/uploads/2015/11/' . $lastCourse[$i]->course_display) }} 180w, {{ asset('wp-content/uploads/2015/11/' . $lastCourse[$i]->course_display) }} 300w" sizes="(max-width: 150px) 100vw, 150px" />
                          </div>
                          <div class="article-title-wrapper">
                            <h5>
                              <a href="{{ $lastCourse[$i]->course_link }}" class="article-title">{{$lastCourse[$i]->course_title}}</a>
                            </h5>
                            <div class="article-date">
                              <span class="day">{{$lastCourse[$i]->created_at}}</span>

                            </div>
                          </div>
                        </div>
                        @endfor
                      </div>
                    </div>
                  </aside>
                </div>
              </div>
            </div>
          </section>
          @endsection
