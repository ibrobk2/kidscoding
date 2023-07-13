<?php

$conn = new mysqli("localhost", "root", "", "kidscoding") or die($conn->error()."Failed to connect");

if(!$conn){
    echo "Failed to Connect";
}

?>