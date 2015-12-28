<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.email {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		input[type=text] {
   			padding:5px; 
    		border:2px solid #ccc; 
    		-webkit-border-radius: 5px;
    		border-radius: 5px;
		}

		input[type=text]:focus {
    		border-color:#333;
		}

		input[type=submit] {
    		padding:5px 15px; 
    		background:#ccc; 
    		border:0 none;
    		cursor:pointer;
    		-webkit-border-radius: 5px;
    		border-radius: 5px; 
		}
	</style>
</head>
<body>
	<div class="email">
		<center>
			<form method ="post" name = "emailauth" action = "auth" id="emailform">
	  			<h1>Email : <input type="text" name="email"></h1>
	  			<h1>Custom 1<textarea name="custom1" form="emailform"></textarea></h1>
	  			<h1>Custom 2<textarea name="custom2" form="emailform"></textarea></h1>
	  			<br><br>
	 			<input type="submit">
			</form>
		</center>
	</div>
</body>
</html>