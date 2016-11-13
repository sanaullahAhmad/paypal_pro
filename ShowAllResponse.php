
  <table class="api" width=600>
	        	<?php
				session_start();
				//echo "<pre>"; 
				//print_r($_REQUEST['resarray']);
				//exit;
				//echo $_SESSION['successful_payment'];
					//print_r($resArray);
					//echo '-------------------------------';
					$resArray = $_SESSION['successful_payment'];
    				foreach($resArray as $key => $value) {
    			
    				echo "<tr><td> $key:</td><td>$value</td>";
    			}	
				unset($_SESSION['successful_payment']);
       			?>
                
                    </td>
                </tr>
  </table>
