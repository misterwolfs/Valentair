@include('includes.modal')

<div class="inner-wrapper overflow form-wrapper">
	<h2>Write your message</h2>
	<h4>You are a ...</h4>
	
	<div class="button-holder overflow form-wrapper">
		<div class="btn-float">
			<button id="happy-couple" class="grey shadow left form-select active">Happy Couple</button>
		</div>
		
		<div class="btn-float">
			<button id="love-hunter" class="grey shadow right form-select">Love Hunter</button>
		</div>
	</div>
	
	<div id="form">
		<div class="form-error"></div>

		{{ Form::open(array('url' => 'liftoff', 'id' => 'happy-couple-form', 'class' => 'active form-wrapper')) }}

			<div class="input-holder">
				{{ Form::label('name', 'Your name'); }}
		    	{{ Form::text('name', '', array('id' => 'name', 'placeholder' => 'Firstname Lastname')); }}
			</div>

			<div class="input-holder">
				{{ Form::label('loved_one', 'The loved one'); }}
		    	{{ Form::text('loved_one', '', array('id' => 'loved_one', 'placeholder' => 'Firstname Lastname')); }}
			</div>

			<div class="input-holder">
				{{ Form::label('place', 'Where do you live'); }}
		    	{{ Form::text('place', '', array('id' => 'place', 'placeholder' => 'Antwerp')); }}
			</div>
			
			<div class="input-holder">
				{{ Form::label('sex', 'What is your email'); }}
		    	{{ Form::email('email', $value = null, $attributes = array('id' => 'email', 'placeholder' => 'john@johndoe.com')); }}
			</div>

			<div class="input-holder">
				{{ Form::label('message', 'Your message:'); }}
		    	<div class="limiter">
			    	{{ Form::textarea('message', '', array('id' => 'message',  'maxlength' => '140', 'cols' => '30', 'rows' => '4', 'placeholder' => 'Be creative, you only have 140 characters !')); }}
			    	<div class="display-limiter couple"></div>
			    </div>
			</div>
		    
		    <div class="clear"></div>
			
			<!-- @if (Auth::check())
				<div class="button-holder btn-center">
					{{ Form::button('Lift-off!', array('class' => 'green logged-in shadow', 'id' => 'couples')); }}
				</div>
			@else
				<div class="button-holder btn-center">
					{{ Form::button('Lift-off!', array('class' => 'green not-logged-in shadow', 'id' => 'couples', 'data-modal' => 'modal-12')); }}
				</div>
			@endif -->

			<div class="button-holder btn-center">
				{{ Form::button('Lift-off!', array('class' => 'green shadow', 'id' => 'couples')); }}
			</div>
		    
		{{ Form::close() }}


		{{ Form::open(array('url' => 'liftoff', 'id' => 'love-hunter-form', 'class' => 'form-wrapper')) }}

			<div class="input-holder">
				{{ Form::label('name', 'Your name'); }}
		    	{{ Form::text('name', '', array('id' => 'name', 'placeholder' => 'Firstname Lastname')); }}
			</div>

			<div class="input-holder">
				{{ Form::label('place', 'Where do you live'); }}
		    	{{ Form::text('place', '', array('id' => 'place', 'placeholder' => 'Antwerp')); }}
			</div>

			<div class="input-holder">
				{{ Form::label('sex', 'What is your sex'); }}
		    	{{ Form::select('sex', array('m' => 'Man', 'W' => 'Woman'), 'M'); }}
			</div>

			<div class="input-holder">
				{{ Form::label('age', 'What is your age'); }}
		    	{{ Form::age(); }}
			</div>

			<div class="input-holder">
				{{ Form::label('sex', 'What is your email'); }}
				{{ Form::email('email', $value = null, $attributes = array('id' => 'email', 'placeholder' => 'john@johndoe.com')); }}			</div>

			<div class="input-holder">
				{{ Form::label('message', 'Your message:'); }}
		    	<div class="limiter">
			    	{{ Form::textarea('message', '', array('id' => 'message', 'maxlength' => '140', 'cols' => '30', 'rows' => '4', 'placeholder' => 'Be creative, you only have 140 characters !')); }}
			    	<div class="display-limiter hunter"></div>
			    </div>
			</div>
		    
		    <div class="clear"></div>
			
			<!-- @if (Auth::check())
				<div class="button-holder btn-center">
					{{ Form::button('Lift-off!', array('class' => 'green logged-in shadow', 'id' => 'hunters')); }}
				</div>
			@else
				<div class="button-holder btn-center">
					{{ Form::button('Lift-off!', array('class' => 'green not-logged-in shadow', 'id' => 'hunters', 'data-modal' => 'modal-12')); }}
				</div>
			@endif -->

			<div class="button-holder btn-center">
				{{ Form::button('Lift-off!', array('class' => 'green shadow', 'id' => 'hunters')); }}
			</div>
		    
		   
		{{ Form::close() }}
	</div>

</div>

<!-- <div class="md-overlay"></div> -->
