<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Blogi</title>
</head>
<body>
	<?php
		include 'menu.php';
		
		$nazwa = "";
		if (isset($_GET['nazwa'])) {
			$nazwa = $_GET['nazwa'];
		}
		if ($nazwa == "") {
         // Wyświetl wszystkie blogi
			$katalog = new DirectoryIterator(".");
			foreach ($katalog as $plikInfo) {
				if ($plikInfo->isDir() && !$plikInfo->isDot()) {
					$blog = $plikInfo->getFilename();
					echo sprintf("<a href=\"blog.php?nazwa=%s\">%s</a><br />", $blog, $blog);
				}
			}
		} else {
			$istnieje = false;
			$katalog = "./" . $nazwa . "/";
			if (file_exists($katalog)) {
				$istnieje = true;
				// Wyświetl podstawowe informacje o blogu
				$descriptionFile = fopen($katalog . "/info.txt", 'r');
				$numerLinii = 1;
				while (($linia = fgets($descriptionFile)) !== false) {
					if ($numerLinii == 1) {
						echo "<h1>" . $linia . "</h1>";
					} else if ($numerLinii == 3) {
						echo "<h3>" . $linia . "</h3>";
					}
					if ($numerLinii >= 4) {
						echo $linia . "<br />";
					}
					$numerLinii = $numerLinii + 1;
				}
				fclose($descriptionFile);


				// Menu dodaj wpis
				// echo "Dodaj nowy wpis";

				// Wyświetl wpisy i komentarze
				$wzorzecNazwyPliku = '/\\d{16}$/';
				$iterator = new DirectoryIterator($katalog);
				foreach ($iterator as $aktualnyPlik) {
					if (!$aktualnyPlik->isDir() && preg_match($wzorzecNazwyPliku, $aktualnyPlik)){
						$zawartosc = file_get_contents($iterator->getPathName());
						echo "<h2>Wpis: " . $aktualnyPlik . "</h2>";
						echo $zawartosc . "<br /></br >";

						// Wyświetl załączniki
						$wzorzecZalacznika = '/' . $aktualnyPlik . '[1-3]/';
						foreach (new DirectoryIterator($katalog) as $plik) {
							if (preg_match($wzorzecZalacznika, $plik)) {
								$sciezkaDoZalacznika = $katalog;
						    	echo sprintf('Dołączony plik: <a href="./%s/%s">%s</a><br />', $nazwaBloga, $plik, $plik);
						 	}
						}
						echo "<br />";
					}
				}
			
			
		}
		
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>

	
</body>
</html>