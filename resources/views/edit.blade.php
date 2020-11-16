@extends('layouts.app')

@section('content')

<form method ="Post" action="/datashow/{{$posts->id}}" >
  @csrf

  <input type="hidden" name="method" value="PUT">
 <input type="text" id="title" name="title" placeholder="enter title" value="{{$posts->title}}">

 <input type="submit" value="Submit">

</form>



@yield('footer)

