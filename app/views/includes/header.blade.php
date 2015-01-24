<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valentair | {{ $title }}</title>
	<meta name="description" content="characters of message matching text with a call to action goes here">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="resources/img/favicon.png" />

	<!-- Google Authorship and Publisher Markup -->
	<link rel="author" href="https://plus.google.com/+NickHellemans/"/>
	<link rel="publisher" href="https://plus.google.com/+NickHellemans/"/>

	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Valentair">
	<meta itemprop="description" content="Send your valentine message into space and spread the world with love !">
	<meta itemprop="image" content="http://valentair.be/resources/img/logo.png">

	<!--Facebook Open Graph-->
	<meta property="og:title" content="Valentair"/>
	<meta property="og:url" content="http://valentair.be/"/>
	<meta property="og:site_name" content="Valentair"/>
	<meta property="og:image" content="http://valentair.be/resources/img/logo.png"/>
	<meta property="og:description" content="Send your valentine message into space and spread the world with love !"/>


	<!--Twitter Card-->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="Valentair_">
	<meta name="twitter:title" content="Send your valentine message into space">
	<meta name="twitter:description" content="Spread the world with love on the 14th of February.">
	<meta name="twitter:creator" content="@nchkhell">
	<meta name="twitter:image:src" content="http://valentair.be/resources/img/logo.png">
	<meta name="twitter:domain" content="http://www.valentair.be">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->

	@if(Route::getCurrentRoute()->getPath() != '/' && Route::getCurrentRoute()->getPath() != 'about')
	<!-- overview -->
	{{ HTML::Style('resources/css/overview.min.css'); }}
	@else
	<!-- home -->
	{{ HTML::Style('resources/css/modals/component.css'); }}
	{{ HTML::Style('resources/css/base.min.css'); }}
	

	{{ HTML::Script('resources/js/modals/modernizr.custom.js'); }}
	@endif

	<link rel="apple-touch-icon-precomposed" href="img/favicon152.png">
	<link rel="shortcut icon" type="image/png" href="img/favicon152.png">


</head>
<body>
