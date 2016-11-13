<?php 
//include('DoDirectPaymentReceipt.php');
?>
<div class="rq-main">
    	<!--=== top-rq-heading ==-->
    	
      <div id="payment">
      <form method="post" action="DoDirectPaymentReceipt.php" name="DoDirectPaymentForm">
    
<table width="801" border="0" cellpadding="4" cellspacing="4">
  <tr>
    <td width="7">&nbsp;</td>
    <td><b>First Name :</b></td>
    <td width="425"><b>Last Name :</b></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name="firstName" /></td>
    <td><input type="text" name="lastName" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>Card Type:</b></td>
    <td><b>Card Number:</b></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select name="creditCardType" class="select_sm-payment">
      <option value="visa">Visa</option>
        <option value="master_card">Master Card</option>
    </select></td>
    <td><b>
      <input type="text" name="creditCardNumber" value="4134489893408837" />
    </b></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>Expiration Date:</b></td>
    <td><b>Address :</b></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select class="select_tiny-payment" name="expDateYear"  style="width:130px;">
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
    </select>
      <select class="select_tiny-payment" name="expDateMonth" style="width:136px;">
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select></td>
    <td><input name="address1"  type="text"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>State:</b></td>
    <td><b>City:</b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><select class="select_med-payment" name="state" style="width:268px;">
      <?php
//state_list($_SESSION['user_data']['state']);

?>
<option value="cheago">checago</option>
<option value="NY">NY</option>
    </select></td>
    <td><input name="city"  type="text"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><b>Zip Code :</b></td>
    <td><b>Amount:</b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="text" name="zip" /></td>
    <td><input name="amount"  type="text"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><input type="image" src="images/process.png" style="width:112px; height:37px;" />
</td>
    </tr>
</table>
</form>

</div>

</div>


       
       
       
        
