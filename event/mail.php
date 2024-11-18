<?
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$ToEmail = "admin@kasonkhoo.com,caspertan@gmail.com";
$ToSubject = "Contact Form from Kason Khoo Events";

$EmailBody =   "Name: $name\n
Email: $email\n
Subject: $subject\n
Message: $message\n";

$Message = $EmailBody;


$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From:".$email."\r\n";

mail($ToEmail,$ToSubject,$Message, $headers);

header('Location: /products/index.html');

?>
