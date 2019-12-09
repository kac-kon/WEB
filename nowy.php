<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
    $blog_name = $_POST['blog_name'];
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];
    $description = $_POST['description'];

    include 'menu.php';

    if (!file_exists($blog_name)) {
      mkdir($blog_name, 0755, true);

      $sciezka_pliku_txt = $blog_name . "/info.txt";
      $info = fopen($sciezka_pliku_txt, 'w');

      if (flock($info, LOCK_EX)) {
         fputs($info, $username . "\n");
         fputs($info, md5($userpass) . "\n");
         fputs($info, $description);
         echo "Blog utworzony <br />";
      }

      flock($info, LOCK_UN);
      fclose($info);

   } else {
      echo "Blog o tej nazwie już istnieje<br/>";
   }
?>
</body>
</html>