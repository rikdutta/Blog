<form method="POST" action="/users">

	{!! csrf_field() !!}
	<input type="text" name="name" required>
	<input type="email" name="email" required>
	<input type="password" name="password" required>
	<input type="submit" name="Create">

</form>