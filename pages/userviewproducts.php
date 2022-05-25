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

<header class="header">

    <a href="../home.php" class="logo"> SpecsWorld</a>

    <!-- Navbar relies here -->
    <nav class="navbar">
        <ul>
            <li><a href="../home.php">home</a></li>
            <li><a href="userviewproducts.php">products</a></li>
            <li><a href="about.php">about</a></li>

            <!-- <li><a href="#">pages +</a>
                <ul>
                    <li><a href="about.html">about</a></li>
                    <li><a href="blogs.html">blogs</a></li>
                </ul> -->
            </li>
            <li><a href="../index.php">signout</a></li>
            <!-- <li><a href="#">account +</a>
                <ul>
                    <li><a href="login.html">login</a></li>
                    <li><a href="register.html">register</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>
</header>
<section class="home">
<div class="slide active" style="background: url(../images/Banner/1.png) no-repeat;">
        
        </div>
</section>
<section class='banner'>    
<?php
        foreach ($result as $key => ['Name' => $name,'Type'=>$type, 'Power'=>$power,'Image'=>$image, 'Price' => $price ]){
          print("
          <form action = 'paymentPage.php' method = 'POST' >
          <div class='box'>
                <img src='$image'>
                <div class='content'>
                <input type = 'hidden' name = 'price' value=$price />
                <input type = 'hidden' name = 'name' value=$name />
                <input type = 'hidden' name = 'Type' value=$type />
                <input type = 'hidden' name = 'power' value=$power />
                    <span>$type</span>
                    <h3>$name</h3>
                    <span>Power: $power</span>
                    <br><br>
                    <span>Price: $price</span>
                    <br><br>
                    <button class='btn' type='submit' > Buy Now </button>
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


</body>
</html>
