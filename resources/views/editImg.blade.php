<!DOCTYPE html>
<html>
<head>
	<title>Edit Image</title>
	<style type="text/css">
		#upd:hover{
			cursor: pointer;

		}
	</style>

</head>

<body>
<h2>Edit Image</h2>



<div style="text-align:center;">
<form action = "/updateImg/{{$imgs->id}}" method="post" enctype="multipart/form-data">

<img src="/uploads/{{ $imgs->name }}" height="400px" width="300px">
<br><br>
Url:<input type="text" name="url" required="true" value="{{$imgs->url}}">
<br><br><br>

<!--<input type="hidden" name="_method" value="put">-->
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" name="submit" value="Update" id="upd">

</form>
</div>
</body>
</html>