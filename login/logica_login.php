<?php
	// pornim sesiunea
	session_start();

	// verificare daca datele au fost trimise prin POST
	if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['utilizator']) && isset($_POST['parola']))
	{
		// preluam datele introduse de utilizator
		$utilizator = $_POST['utilizator'];
		$parola = $_POST['parola'];

		// verificam daca datele contin caractere
		if (empty($utilizator) || empty($parola))
		{
			$_SESSION['eroare'] = "Numele de utilizator și / sau parola nu sunt corecte!";
			header("Location: ".$_SERVER['HTTP_REFERER']);
			exit();
		}

		// verificam daca numele de utilizator si parola sunt corecte (exista in fisierul "utilizatori.txt")
		// deschidem fisierul cu lista de utilizatori
		$listaUtilizatori = "../utilizatori/utilizatori.txt";
		$handle = fopen($listaUtilizatori, "r") or die('Eroare: nu se poate deschide fisierul cu utilizatori!');

		// cautam in lista de utilizatori
		$gasit = false;
		while (($buffer = fgets($handle, 4096)) !== false) {
			// daca exista o potrivire
			if (trim($buffer) == $utilizator."=".$parola)
			{
				// salvam sesiunea
				$_SESSION['utilizator'] = $utilizator;
				$_SESSION['parola'] = $parola;
				header("Location: ".$_SERVER['HTTP_REFERER']);
				$gasit = true;
				break;
			}
		}

		if (!$gasit)
		{
			$_SESSION['eroare'] = "Numele de utilizator și / sau parola nu sunt corecte!";
			header("Location: ./");
		}

		fclose($handle);
	}
?>