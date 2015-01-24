@extends('layouts.master')
@section('content')



<section id="about-valentair" class="outer-wrapper overflow">
	
	<div class="inner-wrapper overflow">
		<h2 class="margin-bottom">About us</h2>
	</div>
	<section id="fixed-navigation" class="heavy-shadow about">
		<nav>
			<ul>
				<li><a href="/">Back to home</a></li>
				<li><a href="overview">All messages</a></li>
			</ul>
		</nav>
	</section>

	<div class="inner-wrapper overflow">
		
		<div class="vertical-center inner-wrapper">
			<div id="how-it-works" class="overflow">
				
					<div class="us us-left">
						
						<h3>Nick Hellemans</h3>

						{{ HTML::Image('resources/img/avatar/nick.jpg', 'Nick Hellemans', array('width' => '90', 'height', '90')); }}

						<p>I'm Nick, a 20 year old student from Antwerp. I have a passion for the web and all the technology that comes with it.
I’m currently a Web & UX student at the Karel de Grote-Hogeschool. Currently a happy couple with the wife of my life. Love doing front-end awesomness and exploring back-end frameworks. I'm always in for a chat, so let's hook up !</p>						
						<p>
							<a href="http://www.nickhellemans.be" class="website" target="_blank">www.nickhellemans.be</a>
						  	<a href="https://twitter.com/nckhell" class="social" target="_blank">@nckhell</a> 
						</p>
					</div>

					<div class="us us-right">
					
						<h3>Robbert Wolfs</h3>
						{{ HTML::Image('resources/img/avatar/robbert.jpg', 'Robbert Wolfs', array('width' => '90', 'height', '90')); }}

						<p>My name is Robbert Wolfs. I'm a 20 year old WEB&UX student from Antwerp and I'm a kick-ass webdeveloper. 
						However, it's not the only thing I aspire to be. I would also like to be a superhero, unfortunately that's not likely to happen. I am always looking to learn new things that will blow my mind away and to make awesome stuff.</p>

						<p>
							<a href="http://www.misterwolfs.be" class="website" target="_blank">www.misterwolfs.be</a>
						  	<a href="https://twitter.com/MisterWolfs" class="social" target="_blank">@misterwolfs</a>
						</p>
					</div>

			</div>
		</div>
	</div>

	</div>
</section>

@stop