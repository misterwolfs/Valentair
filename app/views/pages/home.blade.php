@extends('layouts.master')
@section('content')


<section id="fixed-navigation" class="heavy-shadow">
	<nav>
		<ul>
			<li><a href="overview">All messages</a></li>
			<li><a href="about">About us</a></li>
		</ul>
	</nav>
</section>

<section id="header" class="outer-wrapper overflow">
	
	<div class="background-wrapper">
		<div class="inner-wrapper overflow">
			<div id="logo-wrapper" class="idle">
			<a href="/">{{ HTML::Image('resources/img/logo.png', 'Valentair logo', array('class' => 'high-res', 'width' => '711', 'height' => '636')); }}</a>
			</div>
		</div>
	</div>

	<div id="view-messages-balloon-wrapper" class="idle-alter">
		<a href="overview">{{ HTML::Image('resources/img/all-messages.png', 'View all messages', array('width' => '152', 'height' => '184')); }}</a>
	</div>

	<div id="KDG" class="idle-alter">
		<a href="http://www.kdg.be">{{ HTML::Image('resources/img/KDG.png', 'Karel De Grote-Hogeschool', array('width' => '152', 'height' => '184')); }}</a>
	</div>

	<div class="next-page-teaser bottom">
		<div class="inner-wrapper overflow">
			<h1>
				Send your valentine message to space ! <br>
				<span>and spread the world with <span class="red">love !</span></span>
			</h1>
			<a href="#about-valentair" class="scroll grey"></a>
		</div>
	</div>

</section>

<section id="about-valentair" class="outer-wrapper overflow">
	
	<div class="inner-wrapper overflow">
		<h2>What, to space ?</h2>
		
		<div class="vertical-center inner-wrapper">
			<div id="how-it-works" class="overflow">
				
				<div class="outer-step">
					<div class="inner-step first">
						{{ HTML::Image('resources/img/write-your-message.gif', 'Write your message', array('width' => '300', 'height' => '270')); }}
						<h3>Write your message</h3>
						<p>You two are the happy couple or maybe you’re alone on valentine. It doesn’t matter. Say ‘I love you’ on a very special way or maybe meet someone new. You’ll never know who’s gonna pick up your message !</p>
					</div>
				</div>

				<div class="outer-step">
					<div class="inner-step center">
						{{ HTML::Image('resources/img/ready-for-takeoff.png', 'Ready for take-off', array('width' => '300', 'height' => '270', 'class' => 'idle-slow')); }}
						<h3>Ready for take-off</h3>
						<p>We print your message on some handmade valentine paper and seal it with the special Valentair stamp. It’s now ready for the trip. We will launch as soon as we have enough messages.  3.. 2.. 1.. Houston we have lift-off !</p>
					</div>
				</div>

				<div class="outer-step">
					<div class="inner-step last">
						{{ HTML::Image('resources/img/world-full-of-love.png', 'World full of love', array('width' => '300', 'height' => '270')); }}
						<h3>World full of love</h3>
						<p>We don’t know where your message will land. With it, there is a link. Via the link, the one who found the message is able to say he got your letter and his location. Spread the world full of love. It’s a nice place :-) !</p>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div class="next-page-teaser">
		<div class="inner-wrapper overflow">
			<a href="#send-your-message" class="scroll red margin"></a>
		</div>
	</div>

</section>


<section id="send-your-message" class="outer-wrapper no-height overflow">
	@include('pages.form')	
</section>


@stop