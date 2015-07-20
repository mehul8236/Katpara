<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Katpara: @yield('page_title', 'Katpara')
		</title>
		
		<!-- CSS -->
		{!! HTML::style ( Theme::css('bootstrap') ) !!}
		{!! HTML::style ( Theme::css('jquery-jvectormap-1.2.2') ) !!}
		{!! HTML::style ( Theme::css('AdminLTE.min') ) !!}
		{!! HTML::style ( Theme::css('skins/_all-skins.min') ) !!}
		{!! HTML::style ( Theme::css('font-awesome.min') ) !!}		
		{!! HTML::style ( Theme::css('ionicons.min') ) !!}
		{!! HTML::style ( Theme::css('custom') ) !!}
		{!! Asset::css() !!}
	</head>
	<body class="sidebar-mini skin-green">
		<!-- body -->
		<div class="wrapper">
			<!-- header -->
			<header class="main-header">
				@include('templates.header')
			</header>	
			<!-- .header -->
			<!-- sidebar -->
			<aside class="main-sidebar">
				
			</aside>
			<!-- .sidebar -->
			<!-- content -->
			<div class="content-wrapper" style="min-height: 916px;">
				
			</div>
			<!-- .content -->
			<!-- footer -->
			<footer class="main-footer">
				
			</footer>
			<!-- .footer -->
			<!-- left-sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				
			</aside>
			<!-- .left-sidebar -->
			<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
		</div>
		<!-- .body -->

		<!-- JS -->
		{!! HTML::script ( 'javascripts/jquery.min.js' ) !!}
		{!! HTML::script ( 'javascripts/bootstrap.min.js' ) !!}
		{!! HTML::script ( Theme::js('plugins/fastclick.min') ) !!}
		{!! HTML::script ( Theme::js('app.min') ) !!}
		{!! HTML::script ( Theme::js('plugins/jquery.sparkline.min') ) !!}
		{!! HTML::script ( Theme::js('plugins/jquery-jvectormap-1.2.2.min') ) !!}
		{!! HTML::script ( Theme::js('plugins/jquery-jvectormap-world-mill-en') ) !!}
		{!! HTML::script ( Theme::js('plugins/jquery.sparkline.min') ) !!}
		{!! HTML::script ( Theme::js('plugins/Chart.min') ) !!}
		{!! HTML::script ( Theme::js('pages/dashboard2') ) !!}
		{!! HTML::script ( Theme::js('demo') ) !!}
		{!! Asset::js() !!}
	</body>
</html>