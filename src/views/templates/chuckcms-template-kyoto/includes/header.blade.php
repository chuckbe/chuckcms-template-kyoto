<!-- Header
============================================= -->
<header id="header" class="transparent-header no-sticky">

	<div id="header-wrap">
		<div class="container">
			<a href="{{ URL::to('/') }}"><img src="{{ URL::to('/') }}{{ ChuckSite::getSetting('logo.href') }}" alt="Logo" height="100"></a>
		</div>
		<div>
			<div class="primary-menu-trigger hamburger">
				<i class="icon-line-menu"></i>
				<i class="icon-line-cross"></i>
			</div>
			<div class="global-menu">
				{!! ChuckMenu::renderFrontEnd('chuckcms-template-kyoto') !!}
			</div>
			<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path class="shape-overlays__path"></path>
				<path class="shape-overlays__path"></path>
				<path class="shape-overlays__path"></path>
				<path class="shape-overlays__path"></path>
			</svg>
		</div>
	</div>

</header><!-- #header end -->