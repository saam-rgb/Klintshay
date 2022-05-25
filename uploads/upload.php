<?php
error_reporting(0);
$msg = "";
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
// If upload button is clicked ...

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $glassName = $_POST['glassName'];
    $glassPower = $_POST['glassPower'];
    $glassType = $_POST['glassType'];
    $glassPrice = $_POST['glassPrice'];
    $glassShape = $_POST['glassShape'];

    $filename = $_FILES["uploadGlassesImg"];
    $imagePath = "../uploads/".$filename['name'];
    if($filename){
        move_uploaded_file($filename['tmp_name'],$imagePath);
    }

    $query = "INSERT INTO glasses  (name,power,type,price,shape,image) VALUES ('$glassName', '$glassPower', '$glassType', '$glassPrice', '$glassShape', '$imagePath')";
    if(mysqli_query($conn, $query)){
    header("Location: ../pages/productAddedPrompt.php");
    } else {
        echo "Error Occurred during insertion.".mysqli_error($conn)."<br>";
    }

}
}
?>