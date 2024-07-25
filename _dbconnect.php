<?php

$servername="localhost";
$username="root";
$password="";
$database="users8287";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
   
    die("Error" . mysqli_connect_error());

}
// else{
//     die("error");
// }
?>
