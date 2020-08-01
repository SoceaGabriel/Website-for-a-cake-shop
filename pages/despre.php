<?php 
	include("../login/logica_login.php");
?>
<!DOCTYPE html>

<!--informatii generale -->
<html lang="ro">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About us</title>
<meta name="description" content="Pagina care contine informatii despre cofetarie">
<meta name="author" content="Socea Gabriel">

<!--favicon-->
<link rel="icon" href="../favicon/favicon.ico" type="image/ico" media="all"/>

<!--CSS-->
<link rel="stylesheet" type="text/css" href="../css/stil.css"/>

<!--JavaScript-->
<script type="text/javascript" src="../js/script.js"></script>

<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Emilys+Candy" rel="stylesheet">

</head>
<body onload="showSlides();">

<header>
<!--Bara de sus care contine informatiile legate de contact si butoanele de login, logout,creare cont, vizualizare cos-->
<div id="bara_sus_informatii">
<ul>
	<li><!--<img src="imagini/phone.png" widht="30px" height="30px"/>-->&#9743; 075 842 2156  </li>
	<li><!--<img src="imagini/email.png" widht="30px" height="30px"/>-->&#9993; contact@sweetmoments.ro</li>
</ul>
<!--Logo Site-->
<a href="../index.php" class="link_logo">Sweet Moments</a>

<ul class="bara_sus_informatii_social">
		<li><a href="https://www.facebook.com/sweetmomentscofetarie/" target="_blank"><img src="../imagini/social_media/fb1.png" alt="fb"/></a></li>
		<li><a href="https://www.youtube.com/watch?v=fe64E2kSnVM" target="_blank"><img src="../imagini/social_media/yt1.png"  alt="yt"/></a></li>
		<li><a href="https://www.instagram.com/sweetmomentnyc/" target="_blank"><img src="../imagini/social_media/insta1.png"  alt="insta"/></a></li>
		<li><a href="https://www.google.ro/search?q=Cofetaria+Sweet+Moments&stick=H4sIAAAAAAAAAONgecSYyy3w8sc9YamUSWtOXmOM4-IKzsgvd80rySypFArgYoOyVLgEpXj10_UNDZPK08ySTfKSNRik-LlQhaQUlLh42RRKpERz8ifxawlxivJyfuH9t9FBMNO8LXkiX8cMHgA4MgbtcgAAAA&sa=X&ved=2ahUKEwiDw-vTw-3fAhVB2ywKHbv8D98Q6RMwEHoECAYQBA&biw=1360&bih=686" target="_blank"><img src="../imagini/social_media/google1.png" alt="google"/></a></li>
</ul>

<!--
<ul class="bara_sus_informatii_butoane">
	<li><a href="../login/creare_cont.php">Creare cont nou</a></li>
	<li><a href="../login/login.php">Login</a></li>
	<li><a href="../login/cos.php">Coș de cumpărături</a></li>
	<li><a href="../login/cont.php">Contul meu</a></li>
	<li><a href="../login/logout.php">Deconectare</a></li>
</ul>
-->
</div>
</div>


<!--Slideshow-ul-->
<div id="slideshow" >
<!--Imaginile-->
<div class="mySlides fade">
	<img src="../imagini/img0.jpg" style="width:100%">
</div>

<div class="mySlides fade">
	<img src="../imagini/img1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
	<img src="../imagini/img2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
	<img src="../imagini/img3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
	<img src="../imagini/img4.jpg" style="width:100%">
</div>

<!--Bulinele indicatoare fiearei imagini-->
<div id="buline">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</div>

<!--Bara de meniu - inline-block-->
<div id="menu">
<ul>
<li class="dropdown">
	<a href="../index.php">Acasă</a>
	<div class="dropdown-content">
		<a href="../index.php">Povestea noastră</a>
		<a href="../index.php">Specialitățile noastre</a>
		<a href="../index.php">Produse recomandate</a>
		<a href="../index.php">Cofetarii noștri</a>
	</div>
</li>
<li class="dropdown">
	<a class="dropdown-button" href="#">Produse</a>
	<div class="dropdown-content">
		<a href="../produse/torturi_nunta.php">Torturi de nuntă</a>
		<a href="../produse/torturi_aniversare.php">Torturi aniversare</a>
		<a href="../produse/prajituri.php">Prăjituri</a>
		<a href="../produse/candy_bar.php">Candy Bar</a>
		<a href="../produse/bomboane.php">Bomboane</a>
	</div>
</li>
<li><a href="../pages/despre.php">Despre noi</a></li>
<li><a href="../pages/info.php">Informații utile</a></li>
<li><a href="../pages/contact.php">Contact</a></li>
</ul>
</div>
</header>

<!--main-->
<div id="main">
<!--partea principala-->
<div id="partea_principala">
<div class="stil_pp">
<h1>&#10036; Povestea noastră</h1>
<p>Am debutat in anul 2002, cu fabricarea produselor de patiserie.
In spatiul mic, de altadata, situat pe Strada Dumitriței, clientii erau   intampinati de mirosul imbietor al strudelelor si merdenelelor aburinde, al buseurilor aurii 
sau de parfumul cozonacilor gata scosi din cuptor.</p>

<p>Datorita parerilor pozitive primite din partea clientilor multumiti de calitatea produselor de patiserie, am decis ca în anul 2004 sa ne extindem activitatea prin
 fabricarea si comercializarea produselor de cofetarie.</p>

<p>Am oferit clientilor prajiturile traditionale, precum amandina, savarina si eclerul, toate lucrate cu pricepere si maiestrie, folosind materii prime naturale de cea
 mai buna calitate.</p>
 
<p>Diversificarea activitatii a continuat si in anii urmatori, iar începând din anul 2006, am dezvoltat o linie pentru fabricarea inghetatei. Bazandu-ne pe folosirea unor
 retete traditionale, puse in aplicare de un tehnolog, am reusit crearea unei inghetate delicioase cu diferite arome naturale de fructe sau ciocolata.</p>
 
<p>Oferim clientilor sortimente diversificate de torturi, miniprajituri, minipatiserie, fursecuri, bomboane, cozonaci si turte, precum si asistenta pentru 
comenzile personalizate.</p>

<p>Intrucat deviza Cofetariei Sweet Moments este “Creat cu pasiune” ne propunem sa imbunatatim in permanenta calitatea si sa diversificam cat mai mult gama de produse pentru a 
satisface si cele mai exigente gusturi.</p>
<br/>
<p>Vă mulțumim ca ați ales cofetăria noastră!</p>

</div>
</div>
<!--Aside - informatii despre contact, program, butoane-->
<aside>
<!--Bloc 1-->
<div id="bloc" >
<h1>Contul meu</h1>
		<?php
		if (isset($_SESSION['utilizator']))
		{
		echo "<h2>Bun venit, <span style='color: orange;font-style:italic; font-weight: bold;'>".$_SESSION['utilizator']."</span>!</h2>";
		echo "<a class='bloc_welcome' href='../login/cont.php'>Contul meu</a><br>";
		echo "<form action='../login/logout.php' class='bloc_welcome' method='post'><center><input class='bloc_welcome' type='submit' name='logout' value='Deconectare'/></center></form><br>";
		}
		else{
		echo "<a class='bloc_welcome' href='../login/creare_cont.php'>Creare cont nou</a><br>";
		echo "<a class='bloc_welcome' href='../login/login.php'>Login</a><br>";
		}
	?>
</div>

<!--Bloc 2-->
<div id="bloc">
<h1>Ne gasiți si pe facebook</h1>

<div class="fb-page" data-href="https://www.facebook.com/sweetmomentscofetarie/" data-tabs="timeline" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sweetmomentscofetarie/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sweetmomentscofetarie/">Sweet-Moments</a></blockquote></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</div>

<!--Bloc 3-->
<div id="bloc">
<h1>Transport</h1>
<img src="../imagini/transport.jpg" alt="transport torturi" width="280px" />
<p>Oferim transport gratuit în Piatra Neamț și în localitățile aflate pe o rază de 30 km de oras la comenzi de peste 200 lei, iar în țară la comenzi peste 400 lei.</p>
</div>
</aside>
</div>

<!--Partea de jos-->
<footer>
<!--Sectiunea de jos care contine 3 coloane-->
<div id="column3">

<div id="column3_text">
<!--Coloana 1 care contine programul cofetariei-->
<div class="coloana" class="cl1">
<h1>Program</h1>
<p>Luni-Vineri</p>
<p>8:00-20:00</p>
<p>Sambată-Duminică</p>
<p>10:00-16:00</p>
<p></p>
</div>

<!--Coloana 2 care contine locatia cofetariei-->
<div class="coloana" class="cl2">
<h1>Locații</h1>
<p>Cofetaria: Strada Luceafărului, Nr.23, Piatra Neamț, 610004</p>
<p>Telefon: 075 842 2156</p>
<p>Email: contact@sweetmoments.ro</p>
<p>Laboratorul: Strada Dumitriței, Nr 4, Săvinești, 610098</p>

</div>

<!--Coloana 3 corespunzatoare hartii locatiei-->
<div class="coloana" class="cl3">
<h1>Hartă</h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2851.5028411279914!2d26.123313015277468!3d44.381798579103055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fe0df4090d15%3A0x98880e9163863769!2sCofetaria+Sweet+Moments!5e0!3m2!1sro!2sro!4v1546013723140" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
</div>

</div>

<!--Sectiunea de jos care contine informatii despre autorul site-ului-->
<div id="autor">
<p>&copy;2018-2019. Proiect realizat de Socea Gabriel, student în anul 3 la Facultatea de Automatică si Calculatoare din Iași. Acest magazin online este un proiectul pentru 
finalul materiei Tehnologii Internet</p>
</div>
</footer>
<?php
	exit();
?>
</body>
</html>