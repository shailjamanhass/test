@extends('layouts.app')

@section('content')

<!-- <form method ="Post"action="{{ route('create') }}" > -->
  
  
 {!! Form::open(['url' => '/create']) !!}
  @csrf
 <input type="text" id="title" name="title" placeholder="enter title">

 <input type="submit" value="Submit">

</form>

@yield('footer')



