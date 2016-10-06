		{{favicon()}} 
		<link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600" rel="stylesheet" type="text/css">

		<link media="all" type="text/css" rel="stylesheet" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/css/flexslider.css">
		<link media="all" type="text/css" rel="stylesheet" href="//s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/assets/olsonkart/assets/css/animate.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		@if($tema->isiCss=='')
		{{generate_theme_css('olsonkart/assets/css/style.css?v=002')}}
		@else
		{{generate_theme_css('olsonkart/assets/css/editstyle.css?v=002')}}
		@endif

		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">