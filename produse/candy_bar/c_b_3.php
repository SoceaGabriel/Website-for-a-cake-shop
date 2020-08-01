<?php 
	include("../../login/logica_login.php");
?>
<div id="pagina_produs">
<h1>&#10036; Candy Bar Ana și Edward</h1>
<hr/>
<div id="poza"><img src="imagini/candy_bar_3.jpg" alt="Poza candy bar 3" /></div>
<div id="informatii_produs">
Categorie: Candy bar
<br/>
Subcategorie: Candy bar-uri personalizate
</div>
<div id="descriere_produs">
<p>Prețul variază in funcție de preferințele clientului.</p>
<p> Candy barul este recunoscut ca fiind elementul central al oricarui tip de eveniment, fie el botez, nunta, aniversare sau petrecere corporate. 
Este bufetul de dulciuri, ce include un minim de 9 sortimente de produse rafinate precum: macrons, cupcakes, briose, mousse-uri de ciocolata, cake pops, 
acadele, bezele, trufe, marshmallow trees…Un candy bar perfect este in armonie cu locatia, tematica petrecerii si cromatica evenimentului, astfel ca pe langa 
dulciuri va contine, suporturi, tavi speciale si accesorii personalizate. Un candy bar creaza o experienta unica, atat prin imbinarea gusturilor cat si prin 
spectacolul de imagine, bucurandu-va invitatii pe toata durata petrecerii.</p>
<p>Pentru o cerere personalizată, ne puteți trimite un e-mail pe adresa: contact@sweetmoments.ro</p>
</div>
<hr>

<div id="pret_produs">800-1000 lei</div>


<center>
	<form action="../pages/comanda_produs.php" method="post" class="buton_adauga_cos">
	Cantitate: <input type="number" name="cantitate" value="1" min="1" max="1000" /><br/><br/>
	<?php 
	if (isset($_SESSION['utilizator']))
	{	
		//daca este logat un utilizator afisam Adauga in cos si trimitem la server prin post link-ul catre produs si numele produsului
		echo "<input type='hidden' id='produs' name='produs' value='Candy Bar Ana și Edward'/>";
		echo "<input class='bloc_welcome' type='submit' name='adauga' value='Trimite o comandă'  />";
	?>
	</form>
</center>


</div>
<?php
	}
?>
