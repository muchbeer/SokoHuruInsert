<?php
error_reporting(0);
include("db_config.php");

// array for JSON response
$response = array();

if( isset($_POST['name']) && isset($_POST['price']))
{
    $name=$_POST['name'];
    $price = $_POST['price'];
   

    $result = mysql_query("INSERT INTO myorder(name, price) 

                VALUES('$name', '$price')");    

    if($result>0){
           $response["success"] = 1;
           $response["message"] = "Ongera umeweza.";

         }    
     else{
           $response["success"] = 0;
           $response["message"] = "Pole jarib tena.";

         }
     // echoing JSON response
     echo json_encode($response);
}

?>
