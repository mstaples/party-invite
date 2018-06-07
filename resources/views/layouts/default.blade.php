<html>
	<head>
		<title>Oldfest 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!--[if lte IE 8]>
		<script type="text/javascript" src="{{ asset('js/ie/html5shiv.js') }}"></script>
		<link href="{{ asset('css/ie8.css') }}" rel="stylesheet">
		<![endif]-->

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">

	<!--[if lte IE 9]>
        <link href="{{ asset('css/ie9.css') }}" rel="stylesheet">
	<![endif]-->

	@yield('head')

	</head>

	<body class="index">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="{{ route('index') }}">Oldfest 2018</a></h1>
					<nav id="nav">
					</nav>
				</header>

			@yield('body')

		</div>

		<!-- Scripts -->

		<!-- Scripts -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/skel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
		<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
		<script src="{{ asset('js/jquery.scrollgress.min.js') }}"></script>
		<script src="{{ asset('js/skel-viewport.min.js') }}"></script>
		<script src="{{ asset('js/util.js') }}"></script>
		<!--[if lte IE 8]>
		<script src="{{ asset('js/ie/respond.min.js') }}"></script><![endif]-->
		<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>