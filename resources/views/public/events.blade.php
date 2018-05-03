@extends("layouts.public.base")
@section("content")
<div id="main-content">
  <section class="content-area">
    @for($i = 0; $i < count($eventImage); $i++)
    <div class="top_site_main" style="color: #ffffff;background-image:url({{asset('wp-content/themes/eduma/images/' . $eventImage[$i]->display_image)}});">
      @endfor
      <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
      <div class="page-title-wrapper">
        <div class="banner-wrapper container">
          <h1>Events</h1>
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
            <span itemprop="name" title="Events">Events</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="container site-content">
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <div class="list-tab-event">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tab-regular" data-toggle="tab">Regular</a>
              </li>
              <li>
                <a href="#tab-happening" data-toggle="tab">Happening</a>
              </li>
              <li>
                <a href="#tab-upcoming" data-toggle="tab">Upcoming</a>
              </li>
              <li>
                <a href="#tab-expired" data-toggle="tab">Expired</a>
              </li>
            </ul>
            <div class="tab-content thim-list-event">
              <div role="tabpanel" class="tab-pane fade in active" id="tab-regular">
                @for ($i = 0; $i < count($regular); $i++)
                <div class="item-event post-2952 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry pmpro-has-access">
                  <div class="time-from">
                    <h3 style="color:#ff0023"> {{ $regular[$i]->event_day }}</h3>
                    <h2 class=""> {{ $regular[$i]->event_month }}</h2>
                  </div>
                  <div class="image">
                    <img src="{{asset('666775544547ffcvcvv_66fdcg/thumbnail_uploads/' . $regular[$i]->event_display)}}" alt="event-2" title="event-2"  width="450" height="450">
                  </div>
                  <div class="event-wrapper">
                    <h5 class="title">
                      <a href="#">{{ $regular[$i]->event_title }}</a>
                    </h5>
                    <div class="meta">
                      <div class="time"> <i class="fa fa-clock-o"></i> {{ $regular[$i]->event_time }}</div>
                      <div class="location"> <i class="fa fa-map-marker"></i>{{ $regular[$i]->event_venue }}</div>
                    </div>
                    <div class="description" style="text-align: justify">
                      <p>{!! $regular[$i]->event_details !!}</p>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab-happening">
                @for ($i = 0; $i < count($happening); $i++)
                <div class="item-event post-2953 tp_event type-tp_event status-tp-event-happenning has-post-thumbnail hentry pmpro-has-access">
                  <div class="time-from">
                    <h3 style="color:#ff0023"> {{ $happening[$i]->event_day }}</h3>
                    <h2> {{ $happening[$i]->event_month }}</h2>
                  </div>
                  <div class="image">
                    <img src="{{asset('666775544547ffcvcvv_66fdcg/thumbnail_uploads/' . $regular[$i]->event_display)}}" alt="event-4" title="event-4"  width="450" height="450">
                  </div>
                  <div class="event-wrapper">
                    <h5 class="title">
                      <a href="#"> {{ $happening[$i]->event_title }}</a>
                    </h5>
                    <div class="meta">
                      <div class="time"> <i class="fa fa-clock-o"></i> {{ $happening[$i]->event_time }}</div>
                      <div class="location"> <i class="fa fa-map-marker"></i> {{ $happening[$i]->event_venue }}</div>
                    </div>
                    <div class="description" style="text-align: justify">
                      <p>{{ $happening[$i]->event_details }}</p>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab-upcoming">
                @for ($i = 0; $i < count($upcoming); $i++)
                <div class="item-event post-2952 tp_event type-tp_event status-tp-event-upcoming has-post-thumbnail hentry pmpro-has-access">
                  <div class="time-from">
                    <h3 style="color:#ff0023"> {{ $upcoming[$i]->event_day }}</h3>
                    <h2 class=""> {{ $upcoming[$i]->event_month }}</h2>
                  </div>
                  <div class="image">
                    <img src="{{ asset('666775544547ffcvcvv_66fdcg/thumbnail_uploads/' . $upcoming[$i]->event_display) }}" alt="event-2" title="event-2"  width="450" height="233">
                  </div>
                  <div class="event-wrapper">
                    <h5 class="title">
                      <a href="#">{{ $upcoming[$i]->event_title }} </a>
                    </h5>
                    <div class="meta">
                      <div class="time"> <i class="fa fa-clock-o"></i> {{ $upcoming[$i]->event_time }}</div>
                      <div class="location"> <i class="fa fa-map-marker"></i> {{ $upcoming[$i]->event_venue }}</div>
                    </div>
                    <div class="description" style="text-align: justify">
                      <p>{!! $upcoming[$i]->event_details !!}</p>
                    </div>
                  </div>
                </div>
                @endfor
              </div>
              <div role="tabpanel" class="tab-pane fade" id="tab-expired">
                @for ($i = 0; $i < count($expired); $i++)
                <div class="item-event post-3063 tp_event type-tp_event status-tp-event-expired has-post-thumbnail hentry pmpro-has-access">
                  <div class="time-from">
                    <h3 style="color:#ff0023"> {{ $expired[$i]->event_day }}</h3>
                    <h2 class=""> {{ $expired[$i]->event_month }}</h2>
                  </div>
                  <div class="image"><img src="{{ asset('666775544547ffcvcvv_66fdcg/thumbnail_uploads/' . $expired[$i]->event_display) }}" alt="course-7" title="course-7"  width="450" height="233"></div>
                  <div class="event-wrapper">
                    <h5 class="title">
                      <a href="#"> {{ $expired[$i]->event_title }}</a>
                    </h5>
                    <div class="meta">
                      <div class="time"> <i class="fa fa-clock-o"></i>{{ $expired[$i]->event_time }}</div>
                      <div class="location"> <i class="fa fa-map-marker"></i>{{ $expired[$i]->event_venue }}</div>
                    </div>
                    <div class="description" style="text-align: justify">
                      <p>{{ $expired[$i]->event_details }}</p>
                    </div>
                  </div>
                </div>
                @endfor
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</section>
@endsection
