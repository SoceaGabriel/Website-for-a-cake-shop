<?php 
	include("../../login/logica_login.php");
?>
<div id="pagina_produs">
<h1>&#10036; Acadele Mickey Mouse</h1>
<hr/>
<div id="poza"><img src="imagini/bomboane_3.jpg" alt="Poza bomboane 3" /></div>
<div id="informatii_produs">
Categorie: Bomboane
<br/>
Subcategorie: Pops &amp; Acadele
</div>
<div id="descriere_produs">
<p>Compozitie:blat de cacao umed,crema de ciocolata,glazura de ciocolata,bomboane.</p>
<p>Cele mai bune pops-uri și acadele pe care poți să le găsești in Piatra Neamț.</p>
<p>Pentru o cerere personalizată, ne puteți trimite un e-mail pe adresa: contact@sweetmoments.ro</p>
</div>
<hr>
<div id="pret_produs">7 lei/buc</div>


<center>
	<form action="../pages/comanda_produs.php" method="post" class="buton_adauga_cos">
	Cantitate: <input type="number" name="cantitate" value="1" min="1" max="1000" /><br/><br/>
	<?php 
	if (isset($_SESSION['utilizator']))
	{	
		//daca este logat un utilizator afisam Adauga in cos si trimitem la server prin post link-ul catre produs si numele produsului
		echo "<input type='hidden' id='produs' name='produs' value='Acadele Mickey Mouse'/>";
		
		echo "<input class='bloc_welcome' type='submit' name='adauga' value='Trimite o comandă'  />";
	?>
	</form>
</center>


</div>
<?php
	}
?>
