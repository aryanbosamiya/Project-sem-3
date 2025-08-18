<?php
$hostname="localhost";
$username="root";
$password="";
$database_name="signup";
$conn=mysqli_connect($hostname,$username,$password,$database_name);
if($conn){
    print "db connected";
}
else{
    print "db not connected";
}
?>