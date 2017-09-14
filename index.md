<a>นางสาวบุณยดา สูงติวงค์</a><br>
<a>รหัสนักศึกษา 5808311010</a><br>
<a>มหาวิทยาลัยเนชั่น จังหวัดลำปาง</a><br>
<a href="https://github.com/boonyada/MyLogin/blob/master/login.php">MyLogin</a>

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
