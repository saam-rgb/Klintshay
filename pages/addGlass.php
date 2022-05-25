<?php
include('../libs/loading.php');
?>


<?php 

loadTemplate("head");
// loadTemplate("adminHeader");
?>
<main>
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
    <h1>Add New Glass</h1>
    
</section> 
<section class="login-form">  
<form method="POST" name ="userRegForm" enctype="multipart/form-data" action="../uploads/upload.php" >
        <h3>Enter the Details</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"   placeholder="Name" name="glassName">
</div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="number"  placeholder="Power" name="glassPower">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" placeholder="Type: Reading / Sunglasses / Powerglasses" name="glassType">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="number"  placeholder="Price" name="glassPrice">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="Shape" name="glassShape">
        </div>

        <input type="file" value="Upload Image" name='uploadGlassesImg' class="btn">
        <input type="submit" class="btn" value="Submit" name="submit">
    </form>
    
    </section>
</main>

<?php 
// loadTemplate("footer"); 
?>


    <section class="footer">
<!-- footer relies here -->

<div class="credit"> ©2022  <span>Specsworld</span>   All rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>

