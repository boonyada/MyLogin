<?php
session_start();
if($_GET["usr"] != "tax" || $_GET["pass"] != "pit") 
die("try again");
else
$_SESSION["right"] ="pass";
?>
beautiful world
<a href="friends.php">friend</a>
<a href=login.php>log out</a>
<?php
/*
if($_GET["usr"] == "tax" && $_GET["pass"] == "pit")
echo "pass";
else
echo "fail";
*/
?>