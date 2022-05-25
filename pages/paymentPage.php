<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="payment.css">
</head>

<div class="container">
  <div id="Checkout" class="inline">
      <h1>Pay Invoice</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>
      <form action = "paymentDonePrompt.php" method="POST">
          <div class="form-group">
          <label for="PaymentAmount">Product Name</label>
              <div class="amount-placeholder">
                  <span><?php print($_POST['name']); print(" ");print($_POST['Type']); print(" "); print("Glasses")   ?></span>
                  <br>
                  <span><?php print("Power: "); print(" ");print($_POST['power']);?></span>
              </div>
              <br><br><br>
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>₹</span>
                  <span><?php print($_POST['price']) ?></span>
              </div>
          </div>
          <div class="form-group">
              <label or="NameOnCard">Name on card</label>
              <input id="NameOnCard" class="form-control" type="text" maxlength="255" name = "uname"></input>
          </div>
          <div class="form-group">
              <label for="CreditCardNumber">Card number</label>
              <input id="CreditCardNumber" class="null card-image form-control" type="text" name = "cnum"></input>
          </div>
          <div class="expiry-date-group form-group">
              <label for="ExpiryDate">Expiry date</label>
              <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7" name = "expdate"></input>
          </div>
          <div class="security-code-group form-group">
              <label for="SecurityCode">Security code</label>
              <div class="input-container" >
                  <input id="SecurityCode" class="form-control" type="text" name = "cvv" ></input>
                  <i id="cvc" class="fa fa-question-circle"></i>
              </div>
              <div class="cvc-preview-container two-card hide">
                  <div class="amex-cvc-preview"></div>
                  <div class="visa-mc-dis-cvc-preview"></div>
              </div>
          </div>
          <div class="form-group">
              <label for="inputaddress">Address</label>
              <div class="input-container">
                  <input id="inputAddress" class="form-control" type="text" maxlength="250" name = "address"></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          <div class="zip-code-group form-group">
              <label for="ZIPCode">ZIP/Postal code</label>
              <div class="input-container">
                  <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                  <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="left" data-content="Enter the ZIP/Postal code for your credit card billing address."><i class="fa fa-question-circle"></i></a>
              </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" >
              <span class="submit-button-lock"></span>
              <span class="align-middle">Pay ₹<?php print($_POST['price']) ?></span>
          </button>
      


<?php

error_reporting(0);
$msg = "";
$conn = mysqli_connect("localhost","root","","glass");
if(!$conn){
    die("Error while connecting to the database");
}
$sql = "insert into orders (pname,ptype,price,name,address) values ('$_POST[name]','$_POST[Type]','$_POST[price]','$_POST[address]'";
$result = mysqli_query($conn,$sql);

?>
</form>
  </div>
</div>