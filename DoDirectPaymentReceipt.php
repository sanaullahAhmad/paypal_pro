<?php
error_reporting(0);
/***********************************************************
DoDirectPaymentReceipt.php

Submits a credit card transaction to PayPal using a
DoDirectPayment request.

The code collects transaction parameters from the form
displayed by DoDirectPayment.php then constructs and sends
the DoDirectPayment request string to the PayPal server.
The paymentType variable becomes the PAYMENTACTION parameter
of the request string.

After the PayPal server returns the response, the code
displays the API request and response in the browser.
If the response from PayPal was a success, it displays the
response parameters. If the response was an error, it
displays the errors.

Called by DoDirectPayment.php.

Calls CallerService.php and APIError.php.

***********************************************************/

require_once 'CallerService.php';
session_start();
/**
 * Get required parameters from the web form for the request
 */
$paymentType =urlencode( $_POST['paymentType']);
$firstName =urlencode( $_POST['firstName']);
$lastName =urlencode( $_POST['lastName']);
$creditCardType =urlencode( $_POST['creditCardType']);
$creditCardNumber = urlencode($_POST['creditCardNumber']);
$expDateMonth =urlencode( $_POST['expDateMonth']);

// Month must be padded with leading zero
$padDateMonth = str_pad($expDateMonth, 2, '0', STR_PAD_LEFT);

$expDateYear =urlencode( $_POST['expDateYear']);
$cvv2Number = urlencode($_POST['cvv2Number']);
$address1 = urlencode($_POST['address1']);
$address2 = urlencode($_POST['address2']);
$city = urlencode($_POST['city']);
$state =urlencode( $_POST['state']);
$zip = urlencode($_POST['zip']);
$amount = urlencode($_POST['amount']);
//$currencyCode=urlencode($_POST['currency']);
$currencyCode="USD";
$paymentType=urlencode($_POST['paymentType']);

/* Construct the request string that will be sent to PayPal.
   The variable $nvpstr contains all the variables and is a
   name value pair string with & as a delimiter */
$nvpstr="&PAYMENTACTION=$paymentType&AMT=$amount&CREDITCARDTYPE=$creditCardType&ACCT=$creditCardNumber&EXPDATE=".$padDateMonth.$expDateYear."&CVV2=$cvv2Number&FIRSTNAME=$firstName&LASTNAME=$lastName&STREET=$address1&CITY=$city&STATE=$state".
"&ZIP=$zip&COUNTRYCODE=US&CURRENCYCODE=$currencyCode";



/* Make the API call to PayPal, using API signature.
   The API response is stored in an associative array called $resArray */
$resArray = hash_call("doDirectPayment",$nvpstr);

$send_array=serialize($resArray);

/* Display the API response back to the browser.
   If the response from PayPal was a success, display the response parameters'
   If the response was an error, display the errors received using APIError.php.
 
   */
   $ack = strtoupper($resArray["ACK"]);
//echo $ack;
//exit;

if($ack!="SUCCESS")  {
    $_SESSION['reshash']=$resArray;
	$location = "APIError.php";
	//$location = "index.php?p=error";
	header("Location: $location");
		
   }
   else {
	   	$_SESSION['successful_payment'] = $resArray;
	   
	   }
 print_r($resArray);
 ///exit;
?>

 <div id="payment">


	
   <table width=400 align="center">

        <?php
		/*if( !empty($resArray) )
			{
				$paypal_data = json_encode($resArray);
				//header('location : ../step/ShowAllResponse.php?data='.$paypal_data.'&success=true');
			}
			
			*/   		 	
			//require_once 'ShowAllResponse.php';
			echo "<script>window.location='ShowAllResponse.php';</script>";
				
   		 ?>
    </table>
   </div>      

