<?php
function dbConnect(){
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
}
return $conn;
}
?>