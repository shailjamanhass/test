<h1>Userlist</h1>


@if(count($data) > 0)
	@foreach($data as $item)
		<li><span>{{$item->name}}</span>
			<span>{{$item->email}}</span>
			<span>{{$item->phone}}</span>
			<span>{{$item->password}}</span>
			<span>button</span>


	</li>
	@endforeach

@else
echo "Empty user list data";
@endif

		


<style>
span{
	display:inline-block;
	width:100px
}
li
{
list-style:none
	}
</style>