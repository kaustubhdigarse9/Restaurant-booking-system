<?php
$servername="localhost";
$username="root";
$password="";
$dbname="meemansa";

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