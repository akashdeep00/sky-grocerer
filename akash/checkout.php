<?php
session_start();
$a=$_SESSION['prod'];
$b=$_SESSION['pri'];
$c=$_POST['nam1'];
$d=$_POST['nam3'];
$e=$_POST['nam5'];
$f=$_POST['address'];
$g=$_POST['pincode'];
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
	$sql="insert into `orderdata`( `product`,`price`,`name`,`email`,`mobileno`,`address`,`pincode`) values(     '$a','$b','$c','$d','$e','$f','$g');";
	$var=mysqli_query($conn,$sql);
	if($var)
	{
		
    echo "<script>alert('Order Successful!');
        window.location.href='a.html'</script>";

	}
	else
	{
		echo "Error:".$sql."<br>".mysqli_error($conn);
	}
}
mysqli_close($conn);
?>