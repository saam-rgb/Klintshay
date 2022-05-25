<?php
include('../libs/loading.php');
loadTemplate("head");
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
} else{
    $query = "select * from glasses";
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

  
    <tr>
<!-- Throw the below php code here -->
<section class='banner'>    
<?php
        foreach ($result as $key => ['Name' => $name,'Type'=>$type, 'Power'=>$power,'Image'=>$image, 'Price' => $price,'Shape' => $shape ]){
          print("
          <form action = 'paymentPage.php' method = 'POST' >
          <div class='box'>
                <img src='$image'>
                <div class='content'>
                <input type = 'hidden' name = 'price' value=$price />
                <input type = 'hidden' name = 'name' value=$name />
                <input type = 'hidden' name = 'Type' value=$type />
                <input type = 'hidden' name = 'power' value=$power />
                <input type = 'hidden' name = 'shape' value=$shape />
                    <span>$type</span>
                    <h3>$name</h3>
                    <span>Power: $power</span><br>
                    <span>Shape: $shape</span><br>
                    <span>Price: $price</span>
                    <br><br>
                    
                </div>
            </div>
            </form>
      ");
      
      }
      ?>  
 </section>  
<!--       
    </tbody>
</table> -->
<section class="footer">
<!-- footer relies here -->

<div class="credit"> ©2022  <span>Specsworld</span>   All rights reserved </div>

</section>

</body>
</html>

</body>
</html>