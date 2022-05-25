<?php
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
    mysqli_close($conn);
} else{
include('../libs/loading.php');

// $email = $_POST['email'];
// $password = $_POST['password'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];
loadTemplate("head");
$result = isset($_POST['username'],$_POST['email'],$_POST['password'],$_POST['phone'],$_POST['address']);
// $result = isset($email,$password,$phone,$address);
if($result==false){

?>
<main>
<body>
<section class="heading">
    <h1>New User? Please Register.</h1>
    <p> <a href="../index.php">home</a> >> User Registeration </p>
</section>
<section class="login-form">  
<form method="POST" name ="userRegForm" >
        <h3>Create Account</h3>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="@username" name="username">
</div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="email"  placeholder="Email" name="email">
        </div>
        <div class="inputBox">
            <span class="fas fa-lock"></span>
            <input type="password" placeholder="Password" name="password">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="number"  placeholder="Phone" name="phone">
        </div>
        <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text"  placeholder="Address" name="address">
        </div>

        <input type="submit" value="Create My Account" class="btn">
        <button type="button" class="btn"><a href='../index.php'>Back to Login</a></button>
    </form>
    
    </section>
</main>
<section class="footer">
<!-- footer relies here -->
<div class="credit"> created by <span>Klint Shay</span>, with ❤️ </div>
</section>

<!-- footer section ends -->

</body>
</html>

<?php } 
if($result==true){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
    $query = "INSERT INTO USERS (username,email,password,phone,address) VALUES ('$username', '$email', '$password', '$phone', '$address')";
    if(mysqli_query($conn, $query)){
    header("Location: accountCreatedPrompt.php");
    } else {
        echo "There has been an Error Occurred during insertion.".mysqli_error($conn)."<br>";
    }
}
?>
<?php }
mysqli_close($conn); 
?>