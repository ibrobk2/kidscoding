<?php
session_start();
 //Server connection
 include "./includes/connection.php";

  //variables Declarations
$parent_name = $_POST['first-name'];
$kid_name = $_POST['last-name'];
$parent_phone = $_POST['parentPhone'];
$address = $_POST['address'];


  // $parent_name = $_POST['parent_email'];

// global $parent_name, $kid_name, $address, $parent_phone;

if(isset($_GET['reference'])){
$ref = $_GET['reference'];




//variables from form
// $parent_name = $_POST['first_name'];
// $kid_name = $_POST['last_name'];

//validation
if($ref==""){
    header("Location: javascript://history.go(-1)");
}

$stmt = $conn->query("INSERT INTO `v3`(`parent_name`, `kid_name`, `parent_phone`, `address`, `reference`) VALUES ('$parent_name', '$kid_name', '$parent_phone', '$address', '$reference')");


  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_3409fcb2c1b1bda39ef90dcd974f6650483a1550",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
    $result = json_decode($response);
  }

    if($result->data->status=="success"){
        $satus = $result->data->status;
        $reference = $result->data->reference;
        // $parent_name = $result->data->customer->last_name;
        // $kid_name = $result->data->customer->first_name;
        // $fullname = $firstname." ".$lastname;
        $parent_email = $result->data->customer->email;
        date_default_timezone_set("Africa/Lagos");
        $date_time = date('m/d/Y h:i:s a', time());
        $amount = ($result->data->amount)/100;
        // $address = "Katsina"; //$_POST['address'];

       
        // include "../includes/core.php";
        // TODO: implement Database Registration
            #code here....
        //variables Declarations
          //variables Declarations
          // $parent_name = $_GET['parent_name'];
          // $kid_name = $_GET['kid_name'];
          // // $parent_phone = $_GET['parent_phone'];
          // $address = $_GET['address'];
          // $parent_email = $_POST['email'];
       
            
           
        // 
      
        // $stmt = $conn->prepare("INSERT INTO `v3`(`parent_name`, `kid_name`, `parent_phone`, `address`, `email`, `amount`, `reference`) VALUES (?, ?, ?, ?, ?, ?, ?)");
        // $stmt->bind_param("sssssss", $parent_name, $kid_name, $parent_phone, $address, $parent_email, $amount, $reference);
        // $stmt->execute();

        $stmt = $conn->query("UPDATE `v3` SET `email`='$parent_email', `amount`='$amount' WHERE `reference`='$reference')");

        if($stmt){
          // $parent_name = $_GET['parent_name'];
          // $kid_name = $_GET['kid_name'];
          // $parent_phone = $_GET['parent_phone'];
          // $address = $_GET['address'];
            header("Location: success.php?reference=".$reference);
        }
    }else{
        header("Location: error.html");
    }

  }
else{
  header("Location: index.php");
}


?>
