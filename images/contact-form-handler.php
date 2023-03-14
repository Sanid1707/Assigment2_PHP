

<?php

$errors = '';
$myemail = 'd00251835@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message'])||
    empty($_POST['subject'])||
    empty($_POST['phone'])||
    empty($_POST['company'])||
    empty($_POST['budget'])
   )
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$budget = $_POST['budget'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
}
?>
<?php 
include 'include/header.php';
?>


<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>