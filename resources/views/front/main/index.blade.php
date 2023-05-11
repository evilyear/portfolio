<!doctype html>
<html lang="en-US">
<head>

  <title>{{ __('Frantisek Hives Portfolio')}}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="{{ __('Frantisek Hives')}} " />

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CSorts+Mill+Goudy&#038;display=swap" type="text/css" media="all" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto" type="text/css" media="all" />

  <!-- CSS STYLES -->
  <link rel="stylesheet" href="{{ asset('page/css/vendors/bootstrap.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/vendors/magnific-popup.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/vendors/splitting.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/vendors/swiper.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/vendors/animate.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/main.css') }}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{ asset('page/css/style.css') }}" type="text/css" media="all" />


  <!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('page/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('page/images/favicon.ico') }}" type="image/x-icon">

</head>

<body class="home page light-skin">
	<div class="container-page ">

        @include("front.main.header")

		<!-- Wrapper -->
	    <div class="wrapper">
            @include("front.components.intro") 
            @include("front.components.about")
            @include("front.components.resume")
            @include("front.components.contact")
         {{--   
              
             @include("front.components.projects") 
              --}}
		</div>

        @include("front.main.footer")

	</div>



  <script src="{{ asset('page/js/jquery.min.js') }}"></script>
  <script src="{{ asset('page/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('page/js/bootstrap.js') }}"></script>
  <script src="{{ asset('page/js/swiper.js') }}"></script>
  <script src="{{ asset('page/js/splitting.js') }}"></script>
  <script src="{{ asset('page/js/jarallax.min.js') }}"></script>
  <script src="{{ asset('page/js/magnific-popup.js') }}"></script>
  <script src="{{ asset('page/js/imagesloaded.pkgd.js') }}"></script>
  <script src="{{ asset('page/js/isotope.pkgd.js') }}"></script>
  <script src="{{ asset('page/js/jquery.scrolla.js') }}"></script>
  <script src="{{ asset('page/js/skrollr.js') }}"></script>
  <script src="{{ asset('page/js/jquery.cookie.js') }}"></script>
  <script src="{{ asset('page/js/common.js') }}"></script>
  <script src="{{ asset('page/js/main.js') }}"></script>

</body>
</html>