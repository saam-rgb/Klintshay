<?php
include('libs/loading.php');
?>


<?php 

loadTemplate("head");

?>


<main>
<body>
<header class="header">

    <a href="../Specsworld/home.php" class="logo"> SpecsWorld</a>

    <!-- Navbar relies here -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="pages/userviewproducts.php">products</a></li>
            <li><a href="pages/about.php">about</a></li>

            <!-- <li><a href="#">pages +</a>
                <ul>
                    <li><a href="about.html">about</a></li>
                    <li><a href="blogs.html">blogs</a></li>
                </ul> -->
            </li>
            <li><a href="index.php">signout</a></li>
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

    <div class="slide active" style="background: url(images/Banner/4.png) no-repeat;">
       
    </div>

    <div class="slide" style="background: url(images/Banner/1.png) no-repeat;">
        
    </div>

    <div class="slide" style="background: url(images/Banner/2.png) no-repeat;">
        
    </div>

    <div id="next-slide" onclick="next()" class="fas fa-angle-right"></div>
    <div id="prev-slide" onclick="prev()" class="fas fa-angle-left"></div>

</section>

<!-- home section ends     -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box">
        <img src="/Specsworld/images/Power/1.png" alt="">
        <div class="content">
            <span>Power Glasses</span>
            <h3>upto 50% off</h3>
            <a href="pages/userviewproducts.php" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="/Specsworld/images/Sunglasses/1.webp" alt="">
        <div class="content">
            <span>Sun Glasses</span>
            <h3>upto 50% off</h3>
            <a href="pages/userviewproducts.php" class="btn">shop now</a>
        </div>
    </div>

    <div class="box">
        <img src="/Specsworld/images/Reading/1.png" alt="">
        <div class="content">
            <span>Reading Glasses</span>
            <h3>upto 50% off</h3>
            <a href="pages/userviewproducts.php" class="btn">shop now</a>
        </div>
    </div>

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

