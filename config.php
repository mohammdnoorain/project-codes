<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sss";

//create connection
$con=new mysqli($servername,$username,$password,$dbname);

//check connection
if($con->connect_error){
    die("connection failed:" . $con->connect_error);

}
echo "connection to database succesfully";
?>