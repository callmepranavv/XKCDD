<?php
require_once 'configure.php';
$comicid=rand(1,2478);
$requesturl="https://xkcd.com/$comicid/info.0.json";
$json = file_get_contents($requesturl);
$obj=json_decode($json);
//echo $obj->title;
$alt= $obj->alt;
$comicimage=$obj->img;

$sql = "SELECT * FROM users WHERE active='1'";

if ($result = $con -> query($sql)) {
  while ($row = $result -> fetch_row()) {
    $name=$row[1];
    $email=$row[2];
  
$to="$email";
$subject="Verify your email";
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi '.$name.'</h1>';
$message .= "<br><img src='$comicimage'alt='$alt' /></p>";
$message .= '</body></html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers='From:ykram2019@gmail.com'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
if(mail($to,$subject,$message,$headers))
{
    echo "Success";

}
else
{
    echo "Can't send mail";
}
}
$result -> free_result();
}


?>