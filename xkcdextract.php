<html>
<head> </head>
<body>

<?php
    $comicid=rand(1,2478);
    //$apiUrl='https://xkcd.com';
  //  $apiformat='info.0.json';
    $requesturl="https://xkcd.com/$comicid/info.0.json";
    //header("Location:$requesturl"); 
    $json = file_get_contents($requesturl);
    $obj=json_decode($json);
echo "<br> <h2>";
echo $obj->title;
echo "</h2?";
echo "<br> <h3>";
$alt= $obj->alt;
echo "<br> <h3>";
$comicimage=$obj->img;
echo "<img src='$comicimage'alt='$alt' />";
echo "https://xkcd.com/$comicid";
?>
 <form action="" method=post>

        <br><input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
        header("Location:https://xkcd.com");
    }
    ?>
    
</body>
</html>