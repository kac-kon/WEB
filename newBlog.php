<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Stwórz swojego bloga!</title>

</head>
<body>
	<?php	include 'menu.php'; ?>

	<form action="nowy.php" method="POST">
        <h1>Kreator nowego bloga</h1>

	  		Nazwa bloga:
        		<input type="text" name="blog_name"><br />
        	Nazwa użytkownika:
        		<input type="text" name="username"><br />
        	Hasło:
        		<input type="password" name="userpass"><br />
        	Opis bloga:<br />
        		<textarea name="description" rows="15" cols="40"></textarea><br />

	        <input type="reset" value="Wyczyść" name="clear" />
			  <input type="submit" value="Stwórz bloga">
	</form>
</body>
</html>