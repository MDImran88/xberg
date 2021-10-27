<?php
//echo json_encode(['result' => "success",'msg' =>'hello']);
//exit;
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Type: $type \n Message: $message";
$recipient = "groupinfo1986@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
try {
mail($recipient, $subject, $formcontent, $mailheader);
} catch (Exception $e) {
    echo $e->getMessage();
}
 header("Content-Type: application/json");

 echo $_GET['callback']."(".json_encode(['result' => "success",'msg' =>true]).")";
//echo json_encode);
//echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
