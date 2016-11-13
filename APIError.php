<?php
/*************************************************
APIError.php

Displays error parameters.

Called by DoDirectPaymentReceipt.php, TransactionDetails.php,
GetExpressCheckoutDetails.php and DoExpressCheckoutPayment.php.

*************************************************/

session_start();
$resArray=$_SESSION['reshash']; 
?>

<div class="container">

<div class="container-top-heading-div">
<div class="container-top-heading-bg"> Paypal Error </div>

</div>
<div class="clear"> </div>

<div class="container-text" style="margin-left:200px;">

<table width="280" align="center">
<tr>
		<td colspan="2" class="header"><font color="#FF0000">The PayPal API has returned an error!</font></td>
	</tr>

<?php  //it will print if any URL errors 
	if(isset($_SESSION['curl_error_no'])) { 
			$errorCode= $_SESSION['curl_error_no'] ;
			$errorMessage=$_SESSION['curl_error_msg'] ;	
			
			session_unset();	
?>

   
<tr>
		<td>Error Number:</td>
		<td><?php echo $errorCode . '-----------------------------'; ?></td>
	</tr>
	<tr>
		<td>Error Message:</td>
		<td><?php echo $errorMessage; ?></td>
	</tr>
	
	</center>
	</table>
<?php } else {

/* If there is no URL Errors, Construct the HTML page with 
   Response Error parameters.   
   */
?>


	<font size=2 color=black face=Verdana><b></b></font>
	<br><br>

	<b> PayPal API Error</b><br><br>
	
    <table width = 400>
    	<?php 
    
    require 'ShowAllResponse.php';
    ?>
    </table>
    </center>		
	
<?php 
}// end else
?>

	</table>
 </div>      
</div>
