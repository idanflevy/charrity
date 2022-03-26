

<?php 
error_reporting(0);
 //require_once('config.php');
 require_once('includes/include.php');
// including the session file
//session_start(); 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Ukraine Crisis - Donation</title>
</head>
<body>
<div class="container mt-5 px-5">
   
    <div class="row justify-content-center">
    <div class="mb-4">
       
    </div>
        <div class="col-md-6">
        
            <div class="card p-3">
            <h2>Help Provide Aid in Ukraine</h2> 
            <hr>
                <h6 class="text-uppercase">Enter donation amount $</h6>
                <div class="inputbox mt-3">
                <form action="pay.php"  method="post">
                    
                    <div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text">$</span>
    </div>
     <input type="text" min="1" onkeypress="return onlyNumberKey(event)" autocomplete="off" name="amount" placeholder="0.00" class="form-control" required="required">  </div>
             
</div>
                    
                 <span>Thanks for your humanitarian support, you are so appreciated and nothing is too little at this trying moment.</span>
                <div class="row">
             

                <input class="btn btn-primary btn-lg mt-3" type="submit" name="Submit" value="Donate" />
                </form>
         
                <hr>
                <span>By clicking Donate, you authorize this donation, and agree it is non-refundable and made voluntarily without exchange of goods or services.</span>
                  

                <script>
        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = evt.which ? evt.which : evt.keyCode;
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) {
                alert("Only numbers are allowed!");
                return false;
            }
            return true;
        }
    </script>
                        
                   
                </div>
                
            </div>
         
        </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>