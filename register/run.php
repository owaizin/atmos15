<?php
	
	define("DB_NAME", "atmos_15");
	define("DB_USER", "atmos_15");
	define("DB_PASSWORD", "dotaatmos15");
	define("DB_HOST", "bits-su.com");
	
$link = @mysql_connect(DB_HOST , DB_USER , DB_PASSWORD);
	if(!$link) {
	die('Could not connect:'.mysql_error());
	}
	
$db_selected = mysql_select_db (DB_NAME, $link);
	if(!$db_selected) {
	die('cant use'.DB_NAME.':'.mysql_error());
	}
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$college = $_POST['college'];
$year = $_POST['year'];
$event = $_POST['event'];
$mobile = $_POST['contact'];
$email = $_POST['email'];
$accomidation = $_POST['accomidation'];
$ambassador = $_POST['ambassador'];
$fee = $_POST['fee'];
$header1 = 'Successfuly Rrgistered for Pearl 15';

$sql = "INSERT INTO registrations (firstname , lastname , college , year , event , mobile , email , accom , ambassador , fee) VALUE ('$firstname' , '$lastname' , '$college' , '$year' , '$event' , '$mobile' , '$email' , '$accomidation' , '$ambassador' , '$fee')";
if(!mysql_query($sql)) {
die ('Error :'.mysql_error());
}
header('Location: thankyou.php');
mysql_close();
?>