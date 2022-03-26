<?php

//database login info
$dbuser = "root";
$dbpw = "";
$db = "myshop";
//Specific to you the store owner
$storeName = "BTC PAY";
$rootURL = "http://localhost/nonodepay/NoNodePay"; //example https://mysite.org  or http://yourhomepage.com/store
$yourEmail ="info@pay.btinvestment.org/";  //email notifications will be sent to this email when a new order is placed


//pw to access the admin pages
$adminPW = "honeybadgerbubblegum"; 


//connect to the database
$conn = mysqli_connect("localhost", $dbuser, $dbpw, $db);
if(!$conn){
  die('Connection error check server log');
}

?>
