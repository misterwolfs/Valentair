@extends('layouts.master')
@section('content')

<section id="fixed-navigation" class="heavy-shadow">
	<nav>
		<ul>
			<li><a href="/">Back to home</a></li>
			<li><a href="about">About us</a></li>
		</ul>
	</nav>
</section>

<section id="header" class="outer-wrapper overflow">

	<div class="background-wrapper">
		<div class="inner-wrapper overflow">
			<div id="logo-wrapper">
				<a href="/">{{ HTML::Image('resources/img/logo-overview.png', 'Valentair logo', array('width' => '713', 'height' => '734')); }}</a>
			</div>
		</div>
	</div>
</section>

<section id="overview" class="outer-wrapper overflow">
	
	<div class="timeline"></div>
	<div class="inner-wrapper overflow">

		<div class="happy-couple-messages">
			<h1 class="alternating-big">Happy Couples</h1>


		
			@foreach($couples as $couple)
			<div class="message-wrapper">
				<div class="buble left overflow shadow">
					<div class="heading overflow">
						<p class="left"> {{ ucfirst($couple->firstname) }} @if(isset($couple->lastname)) {{ ucfirst($couple->lastname)  .'.'}}  @endif </p> 
						<p class="right">{{substr(ucfirst($couple->adress), 0, 20)}}@if(strlen($couple->adress) > 20)... @endif</p>
					</div>
					<p>{{ '<span class="red">@' . $couple->loved_one . ':</span> ' . $couple['text'] }}</p>
					<div class="footer">
						<p class="left">{{ $couple->created_at->format('l jS \\of F') }}</p>
						<p class="right">
							@if(isset($couple->arrivedmessage->adress))
								Arrived in {{ $couple['arrivedmessage']['adress'] }}
							@else
								Still in the air!
							@endif
						</p>
					</div>
				</div>
				<div class="circle left">
					@if(isset($couple->arrivedmessage->adress))
					{{ HTML::Image('resources/img/arrived.png', 'arrived', array('class' => 'arrived', 'width' => '20', 'height' => '26')); }}
					@endif
				</div>
			</div>
			@endforeach
		</div>

		<div class="love-hunter-messages">
			<h1 class="alternating-small">Love Hunter</h1>

			@foreach($hunters as $hunter)
			<div class="message-wrapper">
				<div class="buble right overflow shadow">
					<div class="heading overflow">
						<p class="left"> {{ ucfirst($hunter->firstname) }} @if(isset($hunter->lastname)) {{ ucfirst($hunter->lastname)  .'.'}} @endif ({{$hunter->age }})</p>
						<p class="right">{{substr(ucfirst($hunter->adress), 0, 20)}}@if(strlen($couple->adress) > 20)... @endif  </p>
					</div>
					<p>{{ $hunter->text}}</p>
					<div class="footer">
						<p class="left">{{ $hunter->created_at->format('l jS \\of F') }}</p>
						<p class="right">
							@if(isset($hunter->arrivedmessage->adress))
								Arrived in {{ $hunter->arrivedmessage->adress }}
							@else
								Still in the air!
							@endif
						</p>
					</div>
				</div>
				<div class="circle right">
					@if(isset($hunter->arrivedmessage->adress))
					{{ HTML::Image('resources/img/arrived.png', 'arrived', array('class' => 'arrived', 'width' => '20', 'height' => '26')); }}
					@endif
				</div>
			</div>
			@endforeach
		</div>


	
	</div>
}
}

</section>




@stop