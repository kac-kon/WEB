<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Stwórz swojego bloga!</title>

</head>
<body>
	<?php	include 'menu.php'; ?>

	<form action="wpis.php" method="POST">
        <h1>Kreator nowego wpisu</h1>

        	Nazwa użytkownika:
        		<input type="text" name="username"><br />
        	Hasło:
        		<input type="password" name="userpass"><br />
        	Treść wpisu:<br />
        		<textarea name="contents" rows="10" cols="50"></textarea><br />
			Data:
				<input type="text" name = "date" value=<?php echo "" . date("Y-m-d"); ?>><br />
			Godzina:
				<input type="text" name = "date" value=<?php echo "" . date("H:i"); ?>><br />
			Załącznik 1: <input type="file" name="file1"><br><br>
			Załącznik 2: <input type="file" name="file2"><br><br>
			Załącznik 3: <input type="file" name="file3"><br><br>

	        <input type="reset" value="Wyczyść" name="clear" />
			  <input type="submit" value="Stwórz wpis">
	</form>
</body>
</html>