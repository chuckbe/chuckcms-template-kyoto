<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="ChuckCMS" />
	@yield('meta')
	<!-- Stylesheets
	============================================= -->
	@if(array_key_exists('raw', $template->fonts))
	<link href="https://fonts.googleapis.com/css?family={{ $template->fonts['raw'] }}" rel="stylesheet" type="text/css" />
	@endif
	@foreach($template->css as $cssKey => $cssValue)
		@if($cssValue['asset'] == 'true')
			<link rel="stylesheet" href="{{ asset($cssValue['href']) }}" type="text/css" />
		@endif
		@if($cssValue['asset'] == 'false')
			<link rel="stylesheet" href="{{ $cssValue['href'] }}" type="text/css" />
		@endif
	@endforeach
	@yield('css')
	<!-- Document Title
	============================================= -->
	<title>Nairobi | ChuckCMS</title>

</head>

<body class="stretched" data-loader-html="<div><img src='{{ URL::to('/') }}/chuckbe/chuckcms-template-kyoto/images/icons/loader.svg' alt='Loader'></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

			@yield('content')

	</div><!-- #wrapper end -->

	@foreach($template->js as $jsKey => $jsValue)
		@if($jsValue['asset'] == 'true' && $jsKey !== 'menu-easing')
			<script src="{{ asset($jsValue['href']) }}"></script>
		@endif
		@if($jsValue['asset'] == 'false')
			<script src="{{ $jsValue['href'] }}"></script>
		@endif
	@endforeach
	@yield('scripts')
	<script>

		// Hover Script
		jQuery(".img-hover-wrap").hover3d({
			selector: ".img-hover-card",
			shine: false,
		});

	</script>
</body>
</html>