<!-- Default css-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

<!-- Styles -->
{{generate_theme_css('olsonkart/assets/css/flexslider.css')}}
<!-- Bootstrap CSS -->
{{generate_theme_css('olsonkart/assets/css/bootstrap.min.css')}}
<!-- Animate css -->
{{generate_theme_css('olsonkart/assets/css/animate.min.css')}}
<!-- Dropdown menu -->
{{generate_theme_css('olsonkart/assets/css/ddlevelsmenu-base.css')}}
{{generate_theme_css('olsonkart/assets/css/ddlevelsmenu-topbar.css')}}
<!-- Countdown -->
{{generate_theme_css('olsonkart/assets/css/jquery.countdown.css')}}
<!-- Font awesome CSS -->
{{generate_theme_css('olsonkart/assets/css/font-awesome.min.css')}}
<!-- Custom CSS -->
@if($tema->isiCss=='')
	{{generate_theme_css('olsonkart/assets/css/style.css')}}
@else
	{{generate_theme_css('olsonkart/assets/css/editstyle.css')}}
@endif

{{favicon()}}