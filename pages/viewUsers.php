<?php
include('../libs/loading.php');
loadTemplate("head");
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
    $query = "select * from users";
    $result = mysqli_query($conn, $query);
}

?>

  <body>
  <header class="header">

<a href="Specsworld/adminHome.php" class="logo"> SpecsWorld</a>

<!-- Navbar relies here -->
<nav class="navbar">
    <ul>
        
        <!-- <li><a href=" <?php $_SERVER['DOCUMENT_ROOT']."/Specsworld/"."pages/addGlass.php"; ?>">Add Glass</a></li> -->
        <li><a href="addGlass.php">Add Glass</a></li>
        <li><a href="viewProducts.php">View Products</a></li>
        <li><a href="viewUsers.php">View Users</a></li>
        <li><a href="products.html">View Orders</a></li>
        <li><a href="../index.php">Signout</a></li>
       
    </ul>
</nav>
</header>
  
<section class="heading">
    <h1>Registered Users </h1>
   
</section>
<section class='banner'>    
<?php
        foreach ($result as $key => ['username' => $name,'email'=>$email, 'password'=>$password,'phone'=>$phone, 'address'=>$address ]){
          print("
          <div class='box'>
          <img src='ava.png'>
                <div class='content'>
                    <h3>$name</h3>
                    <span><b>Email</b>: $email</span>
                    <br>
                    <span><b>Address</b>: $address</span>
                    <br><br>
                    
                </div>
            </div>
      ");
      
      }
      ?>  
 </section>  
 <section class="footer">
<!-- footer relies here -->

<div class="credit"> ©2022  <span>Specsworld</span>   All rights reserved </div>

</section>
</body>
</html>

</body>
</html>