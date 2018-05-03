@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($blogImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url('wp-content/themes/eduma/images/{{$blogImage[$i]->display_image}}');">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Blog</h1>
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
            <span itemprop="name" title="Why You Should Read Every Day">Blog</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content sidebar-right">
      <div class="row">
        <main id="main" class="site-main col-sm-9 alignleft">
          <div id="blog-archive" class="blog-content blog-switch-layout blog-list">
            <!--<div class="thim-blog-top switch-layout-container">
            <div class="switch-layout">
            <a href="#" class="list switchToGrid  switch-active"><i class="fa fa-th-large"></i></a>
            <a href="#" class="grid switchToList"><i class="fa fa-list-ul"></i></a>
          </div>
          <div class="post-index">Showing 1-9 of 19 results</div>
        </div>-->
        <div class="row">
          @for($i = 0; $i < count($blog); $i++)
          <article id="post-3696" class="blog-grid-3 post-3696 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
            <div class="content-inner">
              <div class='post-formats-wrapper'>
                <a class="post-image" href="">
                  <img width="300" height="153" src="wp-content/uploads/2016/01/{{$blog[$i]->blog_image}}" class="attachment-medium size-medium wp-post-image" alt="" srcset="wp-content/uploads/2016/01/{{$blog[$i]->blog_image}} 300w, wp-content/uploads/2016/01/{{$blog[$i]->blog_image2}} 768w, wp-content/uploads/2016/01/blog-7.jpg 870w" sizes="(max-width: 300px) 100vw, 300px" />
                </a>
              </div>
              <div class="entry-content">
                <div class="author">
                  <img alt="Admin bar avatar" src="wp-content/uploads/2016/03/{{$blog[$i]->author_image}}" class="avatar avatar-40 photo" height="40" width="40" />
                  <span class="vcard author author_name">
                    <a href="">{{$blog[$i]->blog_author}}</a>
                  </span>
                </div>
                <header class="entry-header">
                  <div class="entry-contain">
                    <h2 class="entry-title">
                      <a href="{{route('public_iblog', ['blog_title'=>$blog[$i]->blog_title, 'id'=>$blog[$i]->id])}}" rel="bookmark">{{$blog[$i]->blog_title}}</a>
                    </h2>
                    <ul class="entry-meta">
                      <li class="author">
                        <span>Posted by</span>
                        <span class="vcard author author_name">
                          <a href="#">{{$blog[$i]->blog_author}}</a>
                        </span>
                      </li>
                      <li class="entry-category">
                        <span>Categories</span>
                        <a href="#" rel="category tag">{{$blog[$i]->blog_category}}</a>
                      </li>
                    </ul>
                  </div>
                </header>
                <div class="entry-grid-meta">
                  <div class="date"> <i class="fa fa-calendar"></i>{{$blog[$i]->created_at}}</div>
                  <!--<div class="comments"><i class="fa fa-comment"></i>0</div>-->
                </div>
                <div class="entry-summary">
                  <p>{{$blog[$i]->blog_message}}</p>
                </div>
                <div class="readmore">
                  <a href="">Read More</a>
                </div>
              </div>
            </div>
          </article>
          @endfor
        </div>
      </div>
      <!--<div class="pagination loop-pagination">
      <ul class='page-numbers'>
      <li>
      <span class='page-numbers current'>1</span>
    </li>
    <li>
    <a class='page-numbers' href='https://educationwp.thimpress.com/blog/page/2/'>2</a>
  </li>
  <li>
  <a class='page-numbers' href='https://educationwp.thimpress.com/blog/page/3/'>3</a>
</li>
<li>
<a class="next page-numbers" href="https://educationwp.thimpress.com/blog/page/2/">&#62;</a>
</li>
</ul>
</div>-->
</main>
<div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
  <!--<aside id="search-4" class="widget widget_search">
  <h4 class="widget-title">Search</h4>
  <form role="search" method="get" class="search-form" action="https://educationwp.thimpress.com/">
  <label>
  <span class="screen-reader-text">Search for:</span>
  <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
</label>
<input type="submit" class="search-submit" value="Search" />
</form>
</aside>-->
<aside id="categories-2" class="widget widget_categories">
  <h4 class="widget-title">All Blogs</h4>
  <ul>
    @for($i = 0; $i < count($blog); $i++)
    <li class="cat-item cat-item-9">
      <a href="{{route('public_iblog', ['blog_title'=>$blog[$i]->blog_title, 'id'=>$blog[$i]->id])}}" >{{$blog[$i]->blog_title}}</a>
    </li>
    @endfor
  </ul>
</aside>
<aside id="courses-6" class="widget widget_courses">
  <div class="thim-widget-courses thim-widget-courses-base">
    <h4 class="widget-title">Latest Blogs</h4>
    <div class="thim-course-list-sidebar">
      <div class="lpr_course has-post-thumbnail">
        @for($i = 0; $i < count($blogLatest); $i++)
        <div class="course-thumbnail">
          <img src="wp-content/uploads/2016/01/{{$blogLatest[$i]->blog_image}}" alt="{{$blogLatest[$i]->blog_title}}"/>
        </div>
        <div class="thim-course-content">
          <h3 class="course-title">
            <a href="{{route('public_iblog', ['blog_title'=>$blogLatest[$i]->blog_title, 'id'=>$blogLatest[$i]->id])}}"> {{$blogLatest[$i]->blog_title}}</a>
          </h3>
          <div class="course-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <div class="value free-course" itemprop="price"> Free</div>
            <meta itemprop="priceCurrency" content="&#36;" />
          </div>
        </div>
        @endfor
      </div>
      </div>
    </div>
  </aside>

    <aside id="list-post-8" class="widget widget_list-post">
      <div class="thim-widget-list-post thim-widget-list-post-base">
        <h4 class="widget-title">Random Blogs</h4>
        <div class="thim-list-posts sidebar">
          @for($i = 0; $i < count($randomBlog); $i++)
          <div class="item-post post-3698 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
            <div class="article-image">
              <img width="150" height="150" src="wp-content/uploads/2016/01/{{$randomBlog[$i]->blog_image}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="wp-content/uploads/2016/01/{{$randomBlog[$i]->blog_image}} 150w, wp-content/uploads/2016/01/{{$randomBlog[$i]->blog_image}} 180w, wp-content/uploads/2016/01/{{$randomBlog[$i]->blog_image}} 300w" sizes="(max-width: 150px) 100vw, 150px" />
            </div>
            <div class="article-title-wrapper">
              <h5>
                <a href="{{route('public_iblog', ['blog_title'=>$randomBlog[$i]->blog_title, 'id'=>$randomBlog[$i]->id])}}" class="article-title">{{$randomBlog[$i]->blog_title}}</a>
              </h5>
              <div class="article-date">
                <span class="day">{{ $randomBlog[$i]->created_at }}</span>

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
