<?php
session_start();
if(isset($_SESSION["right"]))
$_SESSION["right"] ="";
?>
<form action=maindata.php method=get>
<input name=usr>
<input name=pass type="password">
<input type=submit value="Click me">
</form>