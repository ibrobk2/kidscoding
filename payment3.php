



<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kids Coding Camp - Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: Arial, sans-serif;
    }
    
    .header {
      background-color: #3d73dd;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    
    .container {
      max-width: 500px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .form-group label {
      font-weight: bold;
    }
    
    .btn-register {
      background-color: #ff5c39;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      padding: 10px 30px;
      border-radius: 30px;
      transition: background-color 0.3s;
      margin-top: 20px;
    }
    
    .btn-register:hover {
      background-color: #ff4026;
    }
    
    .footer {
      background-color: #3d73dd;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Kids Coding Camp V3.0 - Registration Page</h1>
  </header>
  
  <div class="container">
    <h2>Registration Form</h2>
    <form action="" method="POST" id="paymentForm">
      <div class="form-group">
        <label for="parentName">Parent's Name</label>
        <!-- <input type="text" id="first-name" class="form-control"/> -->
        <input type="text" class="form-control" id="parent_name" name="first-name"  required>
      </div>
      
      <div class="form-group">
        <label for="kidName">Kid's Name</label>
        <!-- <input type="text" id="last-name" class="form-control"/> -->
        <input type="text" class="form-control" id="kid_name" name="last-name"  required>
      </div>
      
      <div class="form-group">
        <label for="parentPhone">Parent's Phone Number</label>
        <input type="tel" class="form-control" id="parentPhone" name="parentPhone"  required>
      </div>
      
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address"  required>
      </div>
      
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email"   required>
      </div>
      
      <!-- Add any other relevant fields here -->
      <input type="hidden" name="amount" value="25000">
      <button type="submit" name="btn_reg" class="btn btn-register"  onclick="payWithPaystack()">Proceed to Payment</button>
    </form>
  </div>
  
  <footer class="footer">
    <p>&copy; <script>const d=new Date(); document.write(d.getFullYear());</script> Proxy Software Systems. All rights reserved.</p>
  </footer>
  <script src="https://js.paystack.co/v1/inline.js"></script>
<script>
  const paymentForm = document.getElementById('paymentForm');
      //  var pname: document.getElementById("first-name").value
        paymentForm.addEventListener("submit", payWithPaystack, false);

  function payWithPaystack(e){
    e.preventDefault();
    var handler = PaystackPop.setup({
      key: 'pk_test_4ca55f702a3e739ed5f73b3a29407fa9f514aec7',
      email: document.getElementById("email").value,
      amount: 25000*100,
      ref: 'BKR'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                parent_name: document.getElementById("parent_name").value,
                kid_name: document.getElementById("kid_name").value,
                address: document.getElementById("address").value
                // parent_name: document.getElementById("parent_name").value,
                // kid_name: document.getElementById("kid_name").value,
                // address:  document.getElementById("address").value

                // display_name: "Mobile Number",
                // variable_name: "mobile_number",
                // value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          window.location="paystack_verify.php?reference="+response.reference;
      },
      onClose: function(){
          window.location="./index.php";
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>