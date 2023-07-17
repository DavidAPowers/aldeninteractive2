<form action="/contact" method="post" class="home-contact">
	@csrf
	<legend>Let's Connect!</legend>
	<label>Name</label>
	<input name="name" type="text" />
	<label>Business / Organization</label>
	<input name="org" type="text" />
	<label>Phone</label>
	<input name="phone" type="text" />
	<label>Email</label>
	<input name="email" type="text" />
	<label>How can I help you?</label>
	<textarea name="message"></textarea>
	<br>
	<input type="submit" value="Connect With Us" class="w3-btn w3-black" ></input>
</form>
