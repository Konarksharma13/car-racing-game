<html>
<head>
<title>FORGOT PASSWORD</title>
</head>
<body>
<form method="POST" action="hangman.php">
	<span style="float:right;"><input type="submit" value="HOME"></span>
</form>
<h1>FORGOT PASSWORD</h1>
<form method="POST" action="forget.php" >
<div class="a">
User name:<input type="text" name="x" class="b">
<br>
New Password:<input type="password" name="y" class="b">
<br>
Re-enter New Password:<input type="password" name="z" class="b">
<br><br>
<input type="SUBMIT" value="SUBMIT" class="btn">
</div>
</form>
</body>
</html>
<?php
	if((isset($_POST['x']))&&(isset($_POST['y']))&&(isset($_POST['z'])))
	{	$a=$_POST['x'];
		$b=$_POST['y'];
		$c=$_POST['z'];
		if($b==$c)
			echo"<h1>New Password confirmed</h1>";
		else 	
			echo"<h1>Password does not match</h1>";
	}
?> 