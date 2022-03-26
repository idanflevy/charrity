<?php
session_start();

//get current exchange rate
if(!isset($_SESSION['exr'])){
	$url = "https://www.bitstamp.net/api/ticker/";
	$fgc = file_get_contents($url);
	$json = json_decode($fgc, TRUE);
	$price = (int)$json["last"];

	$_SESSION['exr'] = $price;


   


    
}
	$_SESSION['payTo'] = "bc1qt5jdm4klcyls5jx7g0xyvtup0tduucxq4w6pq6";


?>