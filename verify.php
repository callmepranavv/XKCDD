<?php
session_start();
   $email=$_SESSION['email'];
   $name=$_SESSION['name'];
    if(isset($_POST['submit']))
    {
        if($_POST["otpv"]==$_SESSION['otp1'])
    {
        require_once 'configure.php';

             // row not found, do stuff...
             $sql = "INSERT INTO users (Id, username, email, active) VALUES (NULL, '$name', '$email', '1')";
                if ($con->query($sql) === TRUE) 
                {
                    echo "Your email is successfully registerd";
                    
                  } else {
                    echo "Error: " . $sql . "<br>" . $con->error;
                  }
        
        
    }
    else{
        echo "invalid otp";
    } 
}
?>
<html>
<head>
</head>
<body>
<form action="" method=post>
<input type="text" name="otpv" placeholder="OTP" required>
<button type="submit" name="submit">Submit </button>

</body>
</html>