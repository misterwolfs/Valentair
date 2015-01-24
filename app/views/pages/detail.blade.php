@extends('layouts.master')
@section('content')


<section id="fixed-navigation" class="heavy-shadow">
	<nav>
		<ul>
			<li><a href="../">Back to home</a></li>
			<li><a href="../overview">All messages</a></li>
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

<section id="detail-wrapper" class="outer-wrapper overflow">
	<div class="inner-wrapper overflow">
		<div class="buble center overflow shadow">
			<div class="heading overflow">
				<p class="left">@if(isset($hunter)) {{ $hunter['name'] }} @else  {{ $couple['name'] }} @endif </p>
				<p class="right">@if(isset($hunter)) {{substr(ucfirst($hunter->adress), 0, 20)}}@if(strlen($hunter->adress) > 20)... @endif @else  {{substr(ucfirst($couple->adress), 0, 20)}}@if(strlen($couple->adress) > 20)... @endif @endif</p>
			</div>
			<p>@if(isset($hunter)) {{ $hunter['text'] }} @else  {{ $couple['text'] }} @endif </p>
			<div class="footer">
				<p class="center">Message sent @if(isset($hunter)) {{ $hunter->created_at->format('l jS \\of F') }} @else  {{ $couple->created_at->format('l jS \\of F') }} @endif</p>		
			</div>
			<div class="input-form">
				@if(!isset($arrived['adress']))  
					{{ Form::open(array('url' => 'arrived', 'id' => 'arrived-form', 'class' => 'form-wrapper')) }}
						<div class="input-holder">
						@if(isset($hunter)) 
							{{ Form::hidden('id', '1' . $hunter['id']); }}
						@else 
							{{ Form::hidden('id', '2' . $couple['id']); }}
						@endif
							
						</div>
						<div class="input-holder">
							{{ Form::label('arrived', 'Where did you found the card'); }}
					    	{{ Form::text('arrived', '', array('id' => 'arrived', 'placeholder' => 'Antwerp')); }}
						</div>

						<div class="input-holder">
							{{ Form::label('code', 'Enter the code below'); }}
					    	{{ Form::text('code', '', array('id' => 'code', 'placeholder' => 'e.g. rom438')); }}
						</div>
						
						
						<div class="button-holder ">
							{{ Form::button('I confirm !', array('class' => 'green shadow small', 'id' => 'foundit')); }}
						</div>
					{{ Form::close() }}
				@endif
			</div>
		</div>
	</div>
</section>


@stop