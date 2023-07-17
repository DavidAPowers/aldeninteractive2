@extends('layouts.default')

@section('article')  
<section>
	<h2>Contact</h2>
	<br>
	<p>Fill out the form to get in contact with me. I'll get back in touch with you shortly. Thanks!</p>
</section>	
<hr>
<section>
	
	<form method="post" action="/contact" class="contact-form">
		@csrf
		
		<div class="fieldset">
			<div class="half-width">
				<label>First Name</label>
				<input class="form-control" name="firstname" />
			</div>
			<div class="half-width">
				<label>Last Name</label>
				<input class="form-control" name="lastname" />
			</div>



		</div>
		
		<div class="fieldset">
			<div class="half-width">
				<label>Email</label>
				<input class="form-control" name="email" placeholder="user@domain.com" />
			</div>
			<div class="half-width">

				<label>Phone</label>
				<input class="form-control" name="phone" placeholder="555-555-5555" />
			</div>
		</div>

		<div class="fieldset">
			<div>
				<label>Subject</label>
				<input class="form-control wide" name="subject">	
			</div>
		
		</div>
		<div class="fieldset">
			<div>
				<label>Message</label>
				<textarea class="form-control" name="content"></textarea>	
			</div>		
		</div>		
		
		<br>
		<button type="submit" class="btn btn-standard">Submit</button>
	</form>
</section>
@endsection

<br>
