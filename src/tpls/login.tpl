<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $PAGE_TITLE?></title>
</head>
<body>
<form id="login-form" action="index.php?action=login" method="POST">
Username:<input type="text" name="username" /><br />
Password:<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login" />
</form>
</body>
</html>