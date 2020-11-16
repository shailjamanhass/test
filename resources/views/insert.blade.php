<html>
<head>

<form method="POST" action="{{ route('insert') }}">
	@csrf
  <h3>My Form:</h3>
  <label for="title">title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="content">content:</label><br>
  <input type="submit" value="Submit">
</form> 

</head>
	@if ($message = Session::get('error'))
<div class="alert alert-success alert-block">
	<!-- <button type="button" class="close" data-dismiss="alert">×</button>	 -->
    <strong>{{ $message }}</strong>
</div>
@endif
</html>