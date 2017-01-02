<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<style type="text/css">
		#upd{
			cursor: pointer;
		}
	</style>

</head>
<body>
<h2>Upload Image</h2>



<div style="text-align:center;">

<form action"/uploadfile" method="post" enctype="multipart/form-data">

<input type="file" name="image" required="true">
<br><br>
Url:<input type="text" name="url" required="true">
<br><br><br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="submit" name="submit" value="Submit" id="upd">


</form>
</div>


</body>
</html>