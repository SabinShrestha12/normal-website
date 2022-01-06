<h2> this page is for blade</h2>
<h4><?php
		$a = 10;
		$b = 20;
		$c = $a + $b;
		echo $c;
	?>
</h4>

<!--using for each loop in laravel--->
@foreach($name as $names)
	@if($names == "sabin")
		<h4>{{$names}}</h4>
	@else
		<h4>{{$names}}</h4>
	@endif
@endforeach
<!--using if else inside for loop--->
@for($i=0;$i<count($name);$i++)
	@if($name[$i] == "sabin")
		<marquee>{{$name[$i]}}</marquee>
	@else	
		<h4>{{$name[$i]}}</h4>
	@endif
@endfor
<h4>use console to see output of javascript used in php</h4>
@include('inner')
<script>
	var data = @json($name);
	console.log(data);
	console.warn(data[1]);
</script>
