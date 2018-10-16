<?php
$email=$_POST['email'];
$pass=$_POST['pass'];
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
  	$query="SELECT * from `data` where `email`= '$email' AND `password`= '$pass';"; 
         $result= mysqli_query($conn,$query);
         if (mysqli_num_rows($result)>0)
          {
             while($row=mysqli_fetch_assoc($result))
             {
                 echo "logged in";
             }
                         
         }

         else{
            echo "Invalid username or password";
         }

}
mysqli_close($conn);
?>
