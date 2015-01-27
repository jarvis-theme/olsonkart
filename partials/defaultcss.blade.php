<!-- Default css-->

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

<!-- Styles -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/flexslider.css')}}
<!-- Bootstrap CSS -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/bootstrap.min.css')}}
<!-- Animate css -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/animate.min.css')}}
<!-- Dropdown menu -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/ddlevelsmenu-base.css')}}
{{HTML::style(dirTemaToko().'olsonkart/assets/css/ddlevelsmenu-topbar.css')}}
<!-- Countdown -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/jquery.countdown.css')}}
<!-- Font awesome CSS -->
{{HTML::style(dirTemaToko().'olsonkart/assets/css/font-awesome.min.css')}}
<!-- Custom CSS -->
@if($tema->isiCss=='')
	{{HTML::style(dirTemaToko().'olsonkart/assets/css/style.css')}}
@else
	{{HTML::style(dirTemaToko().'olsonkart/assets/css/editstyle.css')}}
@endif


{{createFavicon($toko)}}