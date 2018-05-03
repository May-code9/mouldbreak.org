@extends('layouts.public.base')
@section('content')
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($whatImage); $i++ )
    <div class="top_site_main" style="color: #ffffff;background-image:url('wp-content/themes/eduma/images/{{$whatImage[$i]->display_image}}')">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>What is MouldBreak</h1>
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
            <span itemprop="name" title="About Us"> What is MouldBreak</span>
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
                <div id="panel-12-2-0-0" class="so-panel widget widget_heading panel-first-child" data-index="4" >
                  <div class="thim-widget-heading thim-widget-heading-base">
                    <div class="sc_heading text-left">
                      <h3 class="title">This is MouldBreak</h3>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </main>
        </div>
      </div>
      <div class="container site-content">
        <div class="row">
          <main id="main" class="site-main col-sm-12 full-width">
            <div class="list-tab-event">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#tab-who" data-toggle="tab">Who</a>
                </li>
                <li>
                  <a href="#tab-history" data-toggle="tab">History</a>
                </li>
                <li>
                  <a href="#tab-growth" data-toggle="tab">Growth</a>
                </li>
                <li>
                  <a href="#tab-evolution" data-toggle="tab">Evolution</a>
                </li>
              </ul>
              <div class="tab-content thim-list-event">
                <div role="tabpanel" class="tab-pane fade in active" id="tab-who">
                  <div class="item-event post-2952 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry pmpro-has-access">
                    <h5 class="title">
                      <a href="#">Who We Are</a>
                    </h5>
                    <div class="description">
                      <p>Mouldbreak is a learning community, driven with the passion to help you move into God’s big plan for your life.</p>
                        <p>It works by creating paradigm shifts based on kingdom principles to help prepare you for enterprise, ministry and leadership.</p>
                        <p>It does this by hosting Seminars, Summits, Conferences, Creative-Broadcasts and Change Projects; and has over the years metamorphosed into monthly Mouldbreak Seminars and a weekly Cluster Class.
                      </p>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-history">
                  <div class="item-event post-2953 tp_event type-tp_event status-tp-event-happenning has-post-thumbnail hentry pmpro-has-access">
                    <h5 class="title">
                      <a href="#">History</a>
                    </h5>
                    <div class="description">
                      <p>The Institute was founded by Reigner Davies, who is the College Director of the Mouldbreak Learning Community. He is a Life Coach, Mentor, Entrepreneurial Management and Leadership Developer.</p> <p> The Institute officially began in January 2009, with its first meeting held at the Genesis Fast Food, Trans-Amadi and a seating of about 35 people. It has since grown to be an expounding hub for sharing redemptive truths in the city of Port Harcourt.</p>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-growth">
                  <div class="item-event post-2952 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry pmpro-has-access">

                    <h5 class="title">
                      <a href="#">Our Growth Over The Years</a>
                    </h5>
                    <div class="description" style="text-align: justify">
                      <p>In its first year, Mouldbreak's foundational courses focused on leadership, entrepreneurial development and Kingdom strategy with an emphasis on nation building and mentoring responsibility designed to help develop its student’s leadership capacity. However, it was discovered that there was a profound need to introduce a redemptive framework which became the bedrock of all its teachings. This had an unprecedented impact on its students; more people joined class, in order to be fed these doctrinal truths on Redemption coupled with an atmosphere of worship and prayer. There were about 30-40 people in attendance then.</p>
                        <p>Having a strong pull towards prayer, the Cluster Class birthed its own prayer school, “Ascents” where prayers were uninterrupted. The prayer school is designed to help build faith by training you to experience protracted hours in prayers mixed with prophecy and declarations of faith-filled words in an atmosphere of worship and it first kicked off with about 30 people. This held every Saturday through out 2015 until it outgrew its venue. In order to accomodate the growing number of people we moved to a larger venue. </p> <p>Over time we have seen the birth of more prayer experiences such as Confluence and Crackdawn; which are respective monthly and weekly prayer events designed to sustain spiritual consciousness.</p>
                        <p>Cluster Class continued to experience growth in numbers and courses, hence its move to the Knowledge Development Centre where we currently hold classes every Mondays which used to be Fridays.
                        Courses on Redemption, Leadership and New Cognition were taught, developed and improved upon over time with a focus on the finished works of Christ in an exciting atmosphere of faith, worship and prayer.</p> <p>As the Mouldbreak Institute enjoys unprecedented growth, its dynamic course delivery continues to serve as a building block that make for effective reasoning and understanding of the systematic design of God’s word so as to aid the study and interpretation of Scripture.
                      </p>
                    </div>

                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-evolution">
                  <div class="item-event post-3063 tp_event type-tp_event status-tp-event-expired has-post-thumbnail hentry pmpro-has-access">
                    <h5 class="title">
                      <a href="#">Evolution of Our Courses</a>
                    </h5>
                    <div class="" style="text-align:justify">
                      <p>Our courses are founded on Redemptive Truths. </p>
                      <p>In its first years, Mouldbreak's courses were focused on leadership and entrepreneurship; it showed the basis of effective leadership and delivered penetrative strategies. The uniqueness of our courses is seen in combining Christ’s Redemptive work and the effect of the Gospel on transformational worldview.</p>
                        <p>Courses on leadership included:</p>
                        <div style="padding-left: 10px">
                        <ol>
                          <li>Nano-Leadership</li>
                          <li>The Spirit of Leadership</li>
                          <li>Influence - Foundation</li>
                          <li>Basis and Strategy</li>
                        </ol>
                      </div>
                        <p>The teachings on redemption form the basis of all our exploits and endeavors. These courses deliver an understanding of what has already been afforded us based on the finished works of Christ; it is the basis for success in ministry, enterprise and industry. </p>
                        <p>The courses include:</p>
                        <div style="padding-left: 10px">
                        <ol>
                          <li>Understanding the Ecclesia</li>
                          <li>Microcosms</li>
                          <li>Revelation, Inspiration and Illumination</li>
                          <li>The Anatomy Of the Seed</li>
                          <li>Strategy, Systems and the Design of Scripture</li>
                          <li>Understanding</li>
                      </ol>
                    </div>
                        <p>These courses provide timeless counsel and exponential value for effective living.</p>
                        <p>Some courses were further condensed and redesigned to enable you take firm hold of your victories wrought in Christ.
                        The New Cognition series birthed courses like;</p>
                        <div style="padding-left: 10px">
                        <ol>
                          <li>The Mind of the Spirit</li>
                          <li>The Sub-Structural Paradigm and Thinking</li>
                        </ol>
                      </div>
                        <p>These courses help thinking be more productive and enable us present our faculties as instruments of God’s will.</p>
                        <p>Joint summit is the Ministry's Annual Event also tagged “Home -coming”. It combines all our classes to produce an “Across the Board” experience for rapid ministry development. In these classes, we connect and collapse our Cluster Classes, Cradle Revolutions, Cradle Summit and now our Sunday School into one common experience to maximize learning and receive impartation from unique ministry gifts for fulfilling your ministry. It is equipped to “Form Christ” in anyone, anywhere, as it passionately imparts the Gospel to the hearers.</p> <p>Joint Summit is the opening of our new school year for the Mouldbreak Institute. In 2016 alone, it had over 1,500 guests and students in attendance. Joint Summit was first held in May, 2014 with (then) Major Moyo Akin-Ojo. It pulled a guest attendance of about 545 at the Knowledge Development Centre. The event brought a complete and holistic change in the dynamics and operations of the Mouldbreak Institute, especially its courses. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
        </div>

        <!-- <div id="pg-2901-4"  class="panel-grid panel-has-style" >
          <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-2901-4" data-siteorigin-parallax="{&quot;backgroundUrl&quot;:&quot;https:\/\/educationwp.thimpress.com\/demo-university-4\/wp-content\/uploads\/sites\/39\/2015\/11\/bg-parallax-about-us.jpg&quot;,&quot;backgroundSize&quot;:[1600,650],&quot;backgroundSizing&quot;:&quot;scaled&quot;,&quot;limitMotion&quot;:&quot;auto&quot;}" data-stretch-type="full" >
            <div id="pgc-2901-4-0"  class="panel-grid-cell panel-grid-cell-empty" ></div>
          </div>
        </div> -->
        <div id="pg-2901-5"  class="panel-grid panel-no-style" >
          <div id="pgc-2901-5-0"  class="panel-grid-cell" >
            <div id="panel-2901-5-0-0" class="so-panel widget widget_heading panel-first-child panel-last-child" data-index="9" >
              <div class="thim-widget-heading thim-widget-heading-base">
                <div class="sc_heading text-center">
                  <h3 class="title">Meet Our Teams</h3>
                  <p class="sub-heading" style="">Top Industry Leaders</p>
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
                  <div class="row">
                    <div class="our-team-item col-sm-3">
                      @for($i = 0; $i < count($lecturer); $i++)
                      <div class="our-team-image">
                        <img src="wp-content/uploads/2015/11/{{$lecturer[$i]->lecturer_display}}" alt="{{$lecturer[$i]->id}}" title="{{$lecturer[$i]->id}}"  width="200" height="200">
                        <div class="social-team">
                          <a href="{{$lecturer[$i]->facebook_add}}"><i class="fa fa-facebook"></i></a>
                          <a href="{{$lecturer[$i]->twitter_add}}"><i class="fa fa-twitter"></i></a>
                          <a href="{{$lecturer[$i]->linkedin_add}}"><i class="fa fa-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="content-team">
                        <h4 class="title">
                          <a href="{{route('public_lecturer')}}">{{$lecturer[$i]->lecturer_name}}</a>
                        </h4>
                        <div class = "regency">{{$lecturer[$i]->school}}</div>
                      </div>
                      @endfor
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
