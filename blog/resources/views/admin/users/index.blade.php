
@foreach($users AS $user)

<li>
	<!--
	<?php  
		//var_dump($user);
	?>
	-->
	{!! $user["firstname"] !!} {!! $user["lastname"] !!} from {!! $user["city"] !!}
	
	<!--{{$user["firstname"]}} {{$user["lastname"]}} from {{$user["city"]}}-->

</li>

@endforeach