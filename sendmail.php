<?php
session_start();
$otp=rand(1,1000);
$_SESSION['otp1']=$otp;

$to=$_SESSION['email'];
$subject="Verify your email";
$message="Thanks for registering with us. use below otp to verify your mail.$otp";
$headers='From:ykram2019@gmail.com';
if(mail($to,$subject,$message,$headers))
{
    echo "Success";

}
else
{
    echo "Can't send mail";
}


?>
