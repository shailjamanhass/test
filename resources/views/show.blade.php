@extends('layouts.app')


@section('content')

<ul>
	@foreach($posts as $Post) 
     <li><a href="{{route('datashow',$Post->id)}}">{{$Post->title}}</a></li>
	@endforeach 
</ul>

@endsection




