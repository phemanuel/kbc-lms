<?php
session_start();
$pname = $_SESSION['pname'] ;
$pcategory = $_SESSION['pcategory'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NYFEW :: Payment</title>
<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha-image-adv?rand_number=" + Math.random();
}
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>
<!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
<!--
.style1 {color: #000000}
.style7 {color: #FF0000}
.style8 {font-size: 16px}
.style12 {font-size: 13px}
.style14 {
	font-size: 16px;
	font-weight: bold;
	color: #996600;
}
.style16 {color: #000000; font-size: 14px; }
-->
    </style>
</head>
<body>

    <div class="main">

        <div class="container">
            <form id="paymentForm" method="post" class="appointment-form">
            <table width="100%" border="0">
                  <tr>
                    <td><div align="center"><img src="images/logo.png" width="294" height="73"></div></td>
                  </tr>
                </table>
                <h2 align="center" class="style8"><br>
                  <em>ONLINE VOTING PAYMENT</em></h2>
              <p align="left" class="style7">&nbsp;</p>
              <br>
              <div class="form-group-1">
          
 <p class="style1"><span class="style7"><span class="style16">The payment was not successful.</span><span class="style14"></span></span></p>
</div>        
              <p>&nbsp;</p>
  <div class="form-submit">
   
                    <input type="button"  class="submit" onClick="MM_goToURL('parent','../index');return document.MM_returnValue" value="Finish"  />
  </div>
                </form>
      </div>

    </div>

    <!-- JS -->
    
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
