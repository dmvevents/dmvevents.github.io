
<?php 
	
if(isset($_POST['email'])  ){

		$result = array();
		array_push($result, $_POST['resfha'] , $_POST['resva'] , $_POST['resconv3'], $_POST['resconv5'] , $_POST['resconv10'] , $_POST['resconv20'] );

		//$resfha = $_POST['resfha'];
		//$resva = $_POST['resva'];
		//$resconv5 = $_POST['resconv5'];
		//$resconv10 = $_POST['resconv10'];
		//$resconv20 = $_POST['resconv20'];
		//$resconv25 = $_POST['resconv25'];
		
		$price = $_POST['price'];
		$loanPeriod = $_POST['loanPeriod'];
		$inter = $_POST['inter'];

		$email_address = $_POST['email'];

		/*$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);*/
		/*$template_file = "$rootDir/wp-content/mort-calc/template.php";*/

		$template_file = "./template.php";

		$email_to = $email_address;
		$subject = "Mortgage Calculator - Results";
		$headers = "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    	$headers .= "From: Caliver Beach < richardr@caliverbeach.com >\n";

		if (file_exists($template_file)) {
			$email = file_get_contents($template_file);
		}else{
			die('unable to locate template file');
		}

		//echo '<pre>'; print_r($resfha); echo '</pre>';


		/*Variables array - user*/
		$variables = array();
		$letter = ['a' , 'b' , 'c' , 'd' , 'e' , 'f'];
		$i = 0;
		foreach ($result as $res) {
			$num = 1;
  			foreach ($res as $field) {
  				$variables["{{".$letter[$i].$num."}}"] = $field;
  				$num ++;
			}	
			$i ++;
		}
		
		$variables['{{price}}'] = $price;
		$variables['{{loanPeriod}}'] = $loanPeriod;
		$variables['{{inter}}'] = $inter;
		$variables['{{email}}'] = "";


//print_r($variables);
    	/*$variables = array(
	        "{{value_txt}}" => $value_txt,
	        "{{deal_value}}" => $deal_value,
	        "{{dep_eq_label}}" => $dep_eq_label,
	        "{{deposit}}" => $deposit,
	        "{{totalAmount}}" => $totalAmount,
	        "{{loanTerm}}" => $loanTerm,
	        "{{rep_int_label}}" => $rep_int_label,
	        "{{rep_inter_val}}" => $rep_inter_val,
	        "{{paymentMonth}}" => $paymentMonth,
	        "{{result_txt}}" => $result_txt,
	        "{{result_append}}" => $result_append,
	        "{{dollar}}" => $dollar,
	        "{{email}}" => ""
   		);*/

  	
    	foreach ($variables as $key => $value)
        	$email = str_replace($key, $value, $email);

    	
    	/*echo '<pre>'; echo $email_to; echo $subject; echo $email; echo $headers; echo '</pre>';*/

/*require_once("../../../wp-load.php");*/
if (mail($email_to, $subject , $email , $headers )) {
	echo "success>>>USER";
}else{
	echo 'not sent to user';
	//echo nl2br("$att \n $pieces \n $hours \n $rate \n $result \n $email_address");
}


	
		



if (file_exists($template_file)) {
			$email2 = file_get_contents($template_file);
		}else{
			die('unable to locate template file');
		}

    	/*$variables2 = array(

	        "{{value_txt}}" => $value_txt,
	        "{{deal_value}}" => $deal_value,
	        "{{dep_eq_label}}" => $dep_eq_label,
	        "{{deposit}}" => $deposit,
	        "{{totalAmount}}" => $totalAmount,
	        "{{loanTerm}}" => $loanTerm,
	        "{{rep_int_label}}" => $rep_int_label,
	        "{{rep_inter_val}}" => $rep_inter_val,
	        "{{paymentMonth}}" => $paymentMonth,
	        "{{result_txt}}" => $result_txt,
	        "{{result_append}}" => $result_append,
	        "{{dollar}}" => $dollar,

	        "{{email}}" => "<p class='useremail'>user's email address: " . $email_address . "</p>"
   		);*/

   		/*Variables array - Admin*/
		$variables2 = array();
		$letter = ['a' , 'b' , 'c' , 'd' , 'e' , 'f'];
		$i = 0;
		foreach ($result as $res) {
			$num = 1;
  			foreach ($res as $field) {
  				$variables2["{{".$letter[$i].$num."}}"] = $field;
  				$num ++;
			}	
			$i ++;
		}
		$variables2['{{price}}'] = $price;
		$variables2['{{loanPeriod}}'] = $loanPeriod;
		$variables2['{{inter}}'] = $inter;
		$variables2['{{email}}'] = "<p class='useremail'>user's email address: " . $email_address . "</p>";
   		


    foreach ($variables2 as $key => $value)
        $email2 = str_replace($key, $value, $email2);
    	
		$email_to_adm = 'richardr@caliverbeach.com';
		$subject = 'New Lead - Mortgage Calculator';
		if (mail($email_to_adm, $subject , $email2 , $headers )) {
			echo "success>>ADMIN";
		}else{
			echo 'not sent to admin';
		}

	/*email template test*/
	/*$asd = [ 'um' => $email , 'dois' => $email2 ];	
	echo json_encode( $asd );*/

}

?>




	


		
		