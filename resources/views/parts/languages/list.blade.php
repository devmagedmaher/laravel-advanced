
<select name="{{$name}}">
	@foreach ($langs as $lang) 
	<option>{{ $lang['name'] }}</option>
	@endforeach
</select> 