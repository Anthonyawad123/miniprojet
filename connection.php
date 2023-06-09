<?php
$servername="localhost";
$username="root";
$password="";
$database="miniprojet";

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
     die("connection faild :" .mysqli_connect_error());
}
 ?>
