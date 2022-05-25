<?php
include('../libs/loading.php');
loadTemplate("head");


error_reporting(0);
$msg = "";
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
}
$uname = "$_POST[uname]";
$cnum = "$_POST[cnum]";
$exp = "$_POST[expdate]";
$cvv = "$_POST[cvv]";
$address = "$_POST[address]";
$sql = "insert into orders (pname,ptype,price,name,address) values ('$uname','$cnum','$exp','$cvv','$address'";
$result = mysqli_query($conn,$sql);


?>
<main>
<body>
<section class="heading">
    <h1>Payment Done Successfully!</h1>
    <p> <a href="../index.php">Order</a> >> Payment</p>
</section>
<br><br><br><br><br>
<center><h1>Please Return to the home page to Browse More.</h1>
<br><br>
<button type="button" class="btn"><a href='../home.php'>Back to Home Page</a></button>
</center>
</main>
</body>
</html>