<div>
	<form method="POST" action="/users">

	{!! csrf_field() !!}
	<div>Name:   </div>
	 <div><input type='text' name="name"> <br/>
	</div> 

	<div>Email:   </div>
	<div><input type="email" name="email"><br/></div>

	<div>Password:</div>
	<div><input type="password" name="password"><br/></div>

	
	<div><input type="submit" value="create" ></div>

</form>
</div>
