<?php
session_start();
 //Server connection
 include "./includes/connection.php";
  
if(isset($_GET['reference'])){
$ref = $_GET['reference'];

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
        $parent_name = $result->data->customer->last_name;
        $kid_name = $result->data->customer->first_name;
        $fullname = $firstname." ".$lastname;
        $parent_email = $result->data->customer->email;
        date_default_timezone_set("Africa/Lagos");
        $date_time = date('m/d/Y h:i:s a', time());
        $amount = ($result->data->amount)/100;
        $address = "Katsina"; //Get the address from response(metadata);


        $stmt = $conn->query("UPDATE `v3` SET `email`='$parent_email', `amount`='$amount' WHERE `reference`='$reference')");

        if($stmt){
         
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
