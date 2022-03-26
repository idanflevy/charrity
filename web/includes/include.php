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
	$_SESSION['payTo'] = "bc1q2lslk4ezz2sqauyflnc2ys89f03dugqzcfwkmy";


?>