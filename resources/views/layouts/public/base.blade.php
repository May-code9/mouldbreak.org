<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage"  prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="dQkU4tyqcczRLrLvnsvCxHwkhuwpJ-C9A4nT3iPnjUY" />
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="https://educationwp.thimpress.com/xmlrpc.php">
  <script type="text/javascript">
  var ajaxurl = "https://educationwp.thimpress.com/wp-admin/admin-ajax.php";
  </script>


  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @if(Route::currentRouteName() == "public_home" || Route::currentRouteName() == "register" || Route::currentRouteName() == "login" || Route::currentRouteName() == "public_jsreg")
  @include("layouts.public.head.index")
  @elseif(Route::currentRouteName() == "public_home2")
  @include("layouts.public.head.index2")
  @elseif(Route::currentRouteName() == "public_contact")
  @include("layouts.public.head.contact")
  @elseif(Route::currentRouteName() == "public_courses" || Route::currentRouteName() == "public_icourse")
  @include("layouts.public.head.courses")
  @elseif(Route::currentRouteName() == "public_about" || Route::currentRouteName() == "public_team" || Route::currentRouteName() == "public_what")
  @include("layouts.public.head.about")
  @elseif(Route::currentRouteName() == "public_gallery")
  @include("layouts.public.head.gallery")
  @elseif(Route::currentRouteName() == "public_events")
  @include("layouts.public.head.events")
  @elseif(Route::currentRouteName() == "public_blog")
  @include("layouts.public.head.blog")
  @elseif(Route::currentRouteName() == "public_iblog")
  @include("layouts.public.head.iblog")
  @endif

  <!-- Scripts -->
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};
  </script>

</head>

<body class="home page-template page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-12 pmpro-body-has-access siteorigin-panels siteorigin-panels-before-js siteorigin-panels-home group-blog thim-body-preload bg-boxed-image" id="thim-body">

  <div id="preload">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
  <div id="wrapper-container" class="wrapper-container">
    <div class="content-pusher">
      @include("layouts.public.partials.header")

      @yield("content")

      @if(Route::currentRouteName() == "public_home")
      @include("layouts.public.footer.footer1")
      @elseif(Route::currentRouteName() == "public_what" || Route::currentRouteName() == "register" || Route::currentRouteName() == "login" || Route::currentRouteName() == "public_jsreg" )
      @include("layouts.public.footer.footer2")
      @elseif(Route::currentRouteName() == "public_courses")
      @include("layouts.public.footer.course")
      @elseif(Route::currentRouteName() == "public_events" || Route::currentRouteName() == "public_contact")
      @include("layouts.public.footer.event")
      @elseif(Route::currentRouteName() == "public_blog")
      @include("layouts.public.footer.blog")
      @elseif(Route::currentRouteName() == "public_iblog")
      @include("layouts.public.footer.iblog")
      @endif

    </body>
    </html>
