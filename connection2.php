<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kaustubh";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  echo "";
}

else
{
  echo "connection failed".mysqli_connect_error();
}
?>