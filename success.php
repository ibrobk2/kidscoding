<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Payment Receipt - Kids Coding Camp</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@300&display=swap" rel="stylesheet">
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: 'Recursive', sans-serif;
    }
    
    .container {
      max-width: 500px;
      margin: 40px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .receipt-info {
      margin-bottom: 30px;
    }
    
    .receipt-info p {
      margin-bottom: 5px;
    }
    
    .receipt-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    
    .receipt-table th,
    .receipt-table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    .receipt-table th {
      background-color: #f8f9fa;
      font-weight: bold;
    }
    
    .receipt-total {
      font-weight: bold;
      text-align: right;
    }
    
    .footer {
      text-align: center;
      margin-top: 20px;
      font-style: italic;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Payment Receipt</h2>
      <h3>Proxy Software Systems</h3>
      <p>2 Mani Rd, WTC Round beside Continental Computers Katsina</p>
    </div>
    
    <div class="receipt-info">
      <?php
        include_once "includes/connection.php";

        if(isset($_GET['reference'])){
          $ref = $_GET['reference'];

          $sql = "SELECT * FROM v3 WHERE reference='$ref'";
          $result = mysqli_query($conn, $sql);

          $data = mysqli_fetch_assoc($result);
        }


      ?>
      <p><strong>Transaction Reference:</strong><?=$_GET['reference']; ?></p>
      <p><strong>Parent's Name:</strong> <?=$data['parent_name']; ?></p>
      <p><strong>Kid's Name:</strong> <?=$data['kid_name']; ?></p>
      <p><strong>Parent's Phone Number:</strong> <?=$data['parent_phone']; ?></p>
      <p><strong>Address:</strong> <?=$data['address']; ?></p>
      <p><strong>Email Address:</strong> <?=$data['email']; ?></p>
    </div>
    
    <table class="receipt-table">
      <thead>
        <tr>
          <th>Description</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Registration Fee (Kid's Coding Camp)</td>
          <td>₦25,000</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td class="receipt-total" colspan="2">Total: ₦25,000</td>
        </tr>
      </tfoot>
    </table>
    
    <p class="footer">Thank you for registering your child at Proxy Software Systems!</p>
  </div>
</body>
</html>
