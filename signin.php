<?php
include("conn.php");
error_reporting(0);

if((isset($_POST['a'])) && (isset($_POST['b'])))
{
	$un = $_POST['a'];
	$pw = $_POST['b'];

	$query = "SELECT * FROM PLAYERS WHERE email = '$un' && password = '$pw'";
	$data = mysqli_query($conn, $query); 
	$total = mysqli_num_rows($data);
	if($total == 1)
	{
		$file=fopen("d.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
	else
	{
		$file=fopen("wrong.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
}

?>