<?php
$conn =  mysqli_connect('bits-su.com','atmos_15','dotaatmos15','atmos_15');
$id = $_POST['id'];
$name = $_POST['name'];
$college = $_POST['college'];
$year = $_POST['year'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$event = $_POST['event'];


$query = "insert into atmos_register (id,name,college,year,phone,email,event) values ('$id','$name','$college','$year','$phone','$email','$event')";
mysqli_query($conn,$query);

$to = $email;
$subject = "ATMOS Registration";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@bits-atmos.com>' . "\r\n";
$message = "Thanks for registering. Your Atmos id is ".$id;
mail($to,$subject,$message,$headers);

$p ="1";
echo $p;


?>
