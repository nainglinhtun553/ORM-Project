<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>This is customer page</h1>


	<form action="{{route('customer#insert')}}" method="post">
		@csrf
		Name: <input type="text" name="customerName" required><br>
		Address: <textarea name="customerAddress"  cols="30" rows="10" required></textarea><br>
		Phone: <input type="number" name="customerPhone" required><br>

		<input type="submit" value="Register">
	</form>



</body>
</html>