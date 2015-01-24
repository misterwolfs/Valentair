<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valentair | Oops, page not found !</title>
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

	<!-- home -->
	{{ HTML::Style('resources/css/404.min.css'); }}
	{{ HTML::Script('resources/js/modals/modernizr.custom.js'); }}


	<link rel="apple-touch-icon-precomposed" href="img/favicon152.png">
	<link rel="shortcut icon" type="image/png" href="img/favicon152.png">


</head>
<body>

	<section id="header" class="outer-wrapper overflow">
		<div class="background-wrapper">
			<div class="inner-wrapper overflow">
				<div id="logo-wrapper" class="idle">
					<a href="/">{{ HTML::Image('resources/img/not-found.png', 'Valentair logo', array('width' => '713', 'height' => '734')); }}</a>
				</div>
			</div>
		</div>
	</section>

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	{{ HTMl::Script('resources/js/base.min.js'); }}	

	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=196140820577732";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-37388138-2', 'valentair.be');
	  ga('send', 'pageview');

	</script>
	
</body>
</html>