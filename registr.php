<?php
	$connect = mysql_connect('phpMyAdmin','debian-sys-maint') or die(mysql_error());
	mysql_select_db('users');

  if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$r_password = $_POST['r_password'];
	if($password = = $r_password){
		$password = md5($password);
		$query = mysql_query('INSERT INTO users VALUES('username','login','password')') or die(mysql_error());
	}
	else{
		die('Password will not correct');
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Реєстрація</title>
<link rel="stylesheet" href="style_register.css" />
</head>

<form method="post" action="registr.php" class="form">
<fieldset>

<p class="question"><label   for="username">Ім'я:</label></p>
<p><input type="text" id="username" name="username"/></p>

<p class="question"><label>Прізвище:</label></p>
<p><input type="text" name="secondname"   /></p>

<p class="question"><label>Логін:</p>
<p><input type="text" name="login"  required /></label></p>

<p class="question"><label>Пароль:</p>
<p><input type="password" name="password"  required /></label></p>

<p class="question"><label>Пароль:</p>
<p><input type="password" name="r_password" required  /></label></p>

</fieldset>
<input type="button" value="зареєструватися"/>

</form>