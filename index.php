<?php
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
    mysqli_close($conn);
} else{
include('libs/loading.php');
$email = $_POST['email'];
$password = $_POST['password'];
$adminAuthResult = validateAdmin($email, $password);
$userAuthResult = validateUser($email, $password);
if( $userAuthResult){
    header("Location: home.php");
}
if($adminAuthResult){
    header("Location: pages/addGlass.php");
}
else{
    loadTemplate("head");
?>
<main>
<body>
<section class="heading">
    <h1>Welcome to Specsworld</h1>
    <h1>Login to continue</h1>
    
</section>
<section class="login-form">  
<form method="POST">
        <h3>Login to Continue</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="email"  placeholder="Email" name="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" placeholder="Password" name="password">
        </div>
        <input type="submit" value="sign in" class="btn">
        <div class="flex">
            <input type="checkbox"  id="remember-me">
            <label for="remember-me">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <a href="pages/userReg.php" class="btn">Create an Account</a>
    </form>
    </section>
</main>
<section class="footer">
<!-- footer relies here -->
<div class="credit"> ©2022  <span>Specsworld</span>   All rights reserved </div>
</section>
<!-- footer section ends -->

</body>
</html>
<?php } ?>
<?php } 


function validateUser($email, $password){

    $conn = mysqli_connect("localhost","root","","glass");
    if(!$conn){
        die("Error while connecting to the database");
    } 
    mysqli_select_db($conn,'glass');
    $query = "SELECT * FROM users  WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count ==1){
        return true;
    }else {
        return false;
    }
}

?>

