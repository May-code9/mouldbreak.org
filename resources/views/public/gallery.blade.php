@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/bg-page.jpg')}});">
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Gallery</h1>
        </div>
      </div>
    </div>
    <div class="breadcrumbs-wrapper">
      <div class="container">
        <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" id="breadcrumbs" class="breadcrumbs">
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="https://educationwp.thimpress.com" title="Home">
              <span itemprop="name">Home</span>
            </a>
          </li>
          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span itemprop="name" title="Gallery"> Gallery</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-4526" class="post-4526 page type-page status-publish hentry pmpro-has-access">
            <div class="entry-content">
              <div id="pl-4526"  class="panel-layout" >
                <div id="pg-4526-0"  class="panel-grid panel-no-style" >
                  <div id="pgc-4526-0-0"  class="panel-grid-cell" >
                    <div id="panel-4526-0-0-0" class="so-panel widget widget_gallery-posts panel-first-child panel-last-child" data-index="0" >
                      <div class="thim-widget-gallery-posts thim-widget-gallery-posts-base">
                        <div class="wrapper-filter-controls">
                          <ul class="filter-controls">
                            <li>
                              <a class="filter active" data-filter="*" href="javascript:;">All</a>
                            </li>
                            <li>
                              <a class="filter" href="javascript:;" data-filter=".filter-11">Business</a>
                            </li>
                            <li>
                              <a class="filter" href="javascript:;" data-filter=".filter-8">Design / Branding</a>
                            </li>
                            <li>
                              <a class="filter" href="javascript:;" data-filter=".filter-9">Blog</a>
                            </li>
                          </ul>
                        </div>
                        <div class="wrapper-gallery-filter row" itemscope itemtype="http://schema.org/ItemList">
                          <div class="col-sm-3 filter-11">
                            <a class="thim-gallery-popup" href="#" data-id="4515">
                              <img src="{{asset('wp-content/uploads/2015/07/kid-course-6-440x440.jpg')}}" alt="Working" title="kid-course-6"  width="440" height="440">
                            </a>
                          </div>
                          <div class="col-sm-3 filter-8">
                            <a class="thim-gallery-popup" href="#" data-id="4518">
                              <img src="{{asset('wp-content/uploads/2015/11/course-4-440x440.jpg')}}" alt="EducationWP" title="course-4"  width="440" height="440">
                            </a>
                          </div>
                          <div class="col-sm-3 filter-11">
                            <a class="thim-gallery-popup" href="#" data-id="4516">
                              <img src="{{asset('wp-content/uploads/2016/03/book-2-440x440.jpg')}}" alt="Our Books" title="book-2"  width="440" height="440">
                            </a>
                          </div>
                          <div class="col-sm-3 filter-8">
                            <a class="thim-gallery-popup" href="#" data-id="4517">
                              <img src="{{asset('wp-content/uploads/2016/03/book-3-440x440.jpg')}}" alt="Our Classes" title="book-3"  width="440" height="440"></a>
                            </div>
                            <div class="col-sm-3 filter-9">
                              <a class="thim-gallery-popup" href="#" data-id="4512">
                                <img src="{{asset('wp-content/uploads/2015/07/kid-course-3-440x440.jpg')}}" alt="Life is Good" title="kid-course-3"  width="440" height="440">
                              </a>
                            </div>
                            <div class="col-sm-3 filter-11">
                              <a class="thim-gallery-popup" href="#" data-id="4514">
                                <img src="{{asset('wp-content/uploads/2016/03/book-4-440x440.jpg')}}" alt="Reading" title="book-4"  width="440" height="440">
                              </a>
                            </div>
                            <div class="col-sm-3 filter-9">
                              <a class="thim-gallery-popup" href="#" data-id="4513">
                                <img src="{{asset('wp-content/uploads/2016/03/presentation-3-440x440.jpg')}}" alt="Presentation 2015" title="presentation-3"  width="440" height="440">
                              </a>
                            </div>
                            <div class="col-sm-3 filter-8">
                              <a class="thim-gallery-popup" href="#" data-id="4510">
                                <img src="{{asset('wp-content/uploads/2016/03/portfolio-course-3-440x440.jpg')}}" alt="Learning" title="portfolio-course-3"  width="440" height="440">
                              </a>
                            </div>
                          </div>
                          <div class="thim-gallery-show"></div>
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
