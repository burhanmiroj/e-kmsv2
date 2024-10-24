<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('includes.head')
</head>
@php
$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout' : '';
$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
$sidebarHide = (!empty($sidebarHide)) ? $sidebarHide : '';
$sidebarTwo = (!empty($sidebarTwo)) ? $sidebarTwo : '';
$sidebarSearch = (!empty($sidebarSearch)) ? $sidebarSearch : '';
$topMenu = (!empty($topMenu)) ? $topMenu : '';
$footer = (!empty($footer)) ? $footer : '';

$pageContainerClass = (!empty($topMenu)) ? 'page-with-top-menu ' : '';
$pageContainerClass .= (!empty($sidebarRight)) ? 'page-with-right-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarLight)) ? 'page-with-light-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarWide)) ? 'page-with-wide-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarHide)) ? 'page-without-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarMinified)) ? 'page-sidebar-minified ' : '';
$pageContainerClass .= (!empty($sidebarTwo)) ? 'page-with-two-sidebar ' : '';
$pageContainerClass .= (!empty($contentFullHeight)) ? 'page-content-full-height ' : '';

$contentClass = (!empty($contentFullWidth) || !empty($contentFullHeight)) ? 'content-full-width ' : '';
$contentClass .= (!empty($contentInverseMode)) ? 'content-inverse-mode ' : '';
@endphp

<body class="{{ $bodyClass }}">
	<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6717b7ba4304e3196ad5afeb/1iaqabc6q';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
	
	@include('includes.component.page-loader')

	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed {{ $pageContainerClass }}">

		@include('includes.header')

		@includeWhen($topMenu, 'includes.top-menu')

		@includeWhen(!$sidebarHide, 'includes.sidebar')

		@includeWhen($sidebarTwo, 'includes.sidebar-right')

		<div id="content" class="content {{ $contentClass }}">
			@yield('content')
		</div>

		@includeWhen($footer, 'includes.footer')

		@include('includes.component.scroll-top-btn')

	</div>

	@include('includes.page-js')
</body>

</html>