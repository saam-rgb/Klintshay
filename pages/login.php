<?php
include "../libs/loading.php";  
$email = $_POST['email'];
$password = $_POST['password'];
$adminAuthResut = validateAdmin($_POST['email'], $_POST['password']);
$userAuthResult = validateUsers($_POST['email'], $_POST['password']);
if($adminAuthResult){
loadTemplate("home");
echo "Directed to Admin Home";
?>

<?php 
}
else{
?>

<?loadTemplate("_head");?>

  <div class="card">
    <br><br>

<main class="form-signin">
    
  <form method="POST" >
    <img class="mb-4" src="https://git.selfmade.ninja/uploads/-/system/appearance/logo/1/Logo_Dark.png" alt="" width="300" height="80">
    <br>
<center><h1 class="h3 mb-3 fw-normal" >Login to Photogram</h1></center>
      <br>
    <div class="form-floating">
      <input type="email" class="form-control"  placeholder="name@example.com" name = "email" >
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control"  placeholder="Password" name = "password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary button hvr-pulse-grow" type="submit" >Sign in </button>
    <p class="mt-5 mb-3 text-muted"></p>
  </form>
</main>
    </div>
</html>

<?php
}; 
?>
