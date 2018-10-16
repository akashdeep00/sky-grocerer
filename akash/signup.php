<?php
$a=$_POST['nam1'];
$b=$_POST['nam2'];
$c=$_POST['nam3'];
$d=$_POST['nam4'];
$e=$_POST['nam5'];
$servername="localhost";
$username="root";
$password="";
$dbname="akash";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
	$sql="insert into `data`(`firstname`,`lastname`,`email`,`password`,`mobileno`) values('$a','$b','$c','$d','$e');";
	$var=mysqli_query($conn,$sql);
	if($var)
	{
		echo "welcome to Sky grocerer";
	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>