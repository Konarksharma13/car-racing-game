<?php
include("conn.php");
error_reporting(0);

$u = $_POST['a'];
$query = "SELECT * FROM PLAYERS WHERE email = '$u'";
$data = mysqli_query($conn, $query); 
$total = mysqli_num_rows($data);

if($total == 1)
{
	$file=fopen("wrong.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

else
{
	$u = $_POST['a'];
	$p = $_POST['b'];
					
	$query = "INSERT INTO PLAYERS VALUES ('$u', '$p')";
	$data = mysqli_query($conn, $query);

	$file=fopen("signin.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

?>

