<?php

$EmailTo = "ivanfermena@gmail.es";
$Subject = "FEVELEX WEBSITE CONTACT FORM";
$Name = $_POST["first-name"]; 
$lastName = $_POST["last-name"]; 
$Email = $_POST["email"]; 
$Tel = $_POST["phone"]; 
$Message = $_POST["message"]; 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, 'hola');

?>