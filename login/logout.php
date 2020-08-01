<?php
	session_start();
	if (isset($_SESSION['utilizator']))
	{
		session_destroy();
		header("Location: ".$_SERVER['HTTP_REFERER']);
		echo "<h2>Deconectare cu succes!</h2>";
	}
?>