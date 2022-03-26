<?php 
session_start();

if(!$_SESSION['payTo']) 
	{
        header("Location: cweriuf-0wrfvhbg-0w3eibvfc-04fcf.html");
	} 

?>

<?php 
$amount = $_POST["amount"] ;
// echo $_POST["amount"] ;

$btc = $amount / $_SESSION['exr'];



$orderCost = round($btc, 6);





?>
<!DOCTYPE html>
<html lang="en">

<title>Pay</title>
<link rel="stylesheet" type="text/css" href="styles.css">



</head>
<body>

<div style="margin-top:10px;" id="viewCart">
  <span id="viewTitle">Finish & Pay</span><br>
  <div id="payAmt"><b>Amount Due: <?php echo $orderCost; ?> BTC</b><br>
  Thanks for your humanitarian support, you are so appreciated and nothing is too little at this trying moment <br>
  <div id="qrcode"></div>
  <script type="text/javascript">
  new QRCode(document.getElementById("qrcode"), "<?php echo $_SESSION['payTo']; ?>");
  </script>

<a href=""><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=bitcoin:<?php echo $_SESSION['payTo']; ?>?amount=<?php echo $orderCost; ?>" alt="Bitcoin QR Code Generator" height="300" width="300" border="0" /></a>
  <br>
  <input type="text" id="payBox" value="<?php echo $_SESSION['payTo']; ?>" onclick="this.select();" readonly>
  <br><div id="messages"></div>
  </div>
</div>
<br>
<?php 
session_destroy();
?>
    
</body>
</html>