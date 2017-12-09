<form method="POST" action="/users">

	{!! csrf_field() !!}
	<fieldset>
	Name:    <input type='text' name="name"> <br/>
	Email:   <input type="email" name="email"><br/>
	Password:<input type="password" name="password"><br/>
	<input type="submit" value="create" >
	</fieldset>

</form>