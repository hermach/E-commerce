<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$name = $_POST['name'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$email_from = 'tahre1993@outlook.com';
$email_subject ='contact form test';
$email_body = "User name : $name . \n " . "User e-mail $email . \n " . "Email subject : $subject .\n ". "User message : $message .\n ";
include 'admin/db.php' ; 
$pdo=$db;

$sql='INSERT INTO contact values(NULL,?,?,?,?,NOW())';
		$q = $pdo->prepare($sql);	
    	$q->execute(array($name,$email,$subject,$message));


$to = 'tahre1993@gmail.com';
$headers = "form : $email_from \r\n ";
$headers .= "Reply-to : $email \r\n";
mail($to, $email_subject,$email_body,$headers);
header('Location: index.php');
}
?>