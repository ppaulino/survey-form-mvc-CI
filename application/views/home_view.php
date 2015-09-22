<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
</head>
<body>
	<h1>Survey Form</h1>
	<div id="container">
		<div id="body">​
			<form action="surveys" method="post">​
				<label>Your Name:</label>​
				<input type="text" name="name" required><br>​
				<label>Dojo Location: </label>​
				<select name="location">​
					<option value="San Jose">San Jose</option>​
					<option value="Seattle">Seattle</option>​
					<option value="Los Angeles">Los Angeles</option>​
				</select> <br>​
				<label>Favorite Language:</label>​
				<select name="language">​
					<option value="Javascript">Javascript</option>​
					<option value="PHP">PHP</option>​
					<option value="HTML">HTML</option>​
				</select> <br>​
				<label>Comment (optional):</label><br>​
				<textarea name="comment" cols="40" rows="5"></textarea> <br>​
				<input type="submit" value="submit">​
			</form>​
		</div>​
	</div>
</body>
</html>