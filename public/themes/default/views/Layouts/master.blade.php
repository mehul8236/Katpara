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
		{!! HTML::style ( 'styles/normalize.css' ) !!}
		{!! HTML::style ( 'styles/bootstrap.min.css' ) !!}
		{!! HTML::style ( 'styles/bootstrap-theme.min.css' ) !!}
		{!! HTML::style ( 'styles/bootstrap-responsive.min.css' ) !!}
		{!! HTML::style ( Theme::css('custom') ) !!}
		{!! Asset::css() !!}
	</head>
	<body>

		<!-- header -->
		@include('templates.navbar')
		<!-- .header -->

	    <!-- content -->
		<div class="main">
			@yield('content')	
		</div>
	    <!-- .content -->

		<!-- footer -->
		@include('templates.footer')
		<!-- .footer -->

		<!-- JS -->
		{!! HTML::script ( 'javascripts/jquery.min.js' ) !!}
		{!! HTML::script ( 'javascripts/bootstrap.min.js' ) !!}
		{!! Asset::js() !!}
	</body>
</html>