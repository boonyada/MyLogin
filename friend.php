<?php
session_start();
if(!isset($_SESSION["right"]) || $_SESSION["right"]!="pass") {
echo '<a href=login.php>back</a>';
exit;
}
?>
tax
pit
<a href=login.php>log out</a>