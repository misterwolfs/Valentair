	@if($title != "About us")
	<section id="footer" class="@if($title == 'About us') gray @endif outer-wrapper no-height overflow">
		
		<footer class="inner-wrapper overflow">
			<p>Copyright 2014 - Valentair.be</p>
			<ul>
				@if($title != 'Send your valentine message into space')
					<li><a href="/">Home</a></li>
				@endif
				
				<li><a href="/about">About us</a></li>
				
				@if($title != 'All messages')
				<li><a href="/overview">View all messages</a></li>
				@endif
			</ul>
		</footer>

	</section>
	@endif

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