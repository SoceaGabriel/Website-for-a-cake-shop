<?php 
	include("../../login/logica_login.php");
?>
<div id="pagina_produs">
<h1>&#10036; Tiroleza</h1>
<hr/>
<div id="poza"><img src="imagini/prajitura_2.jpg" alt="Poza prajitura 2" /></div>
<div id="informatii_produs">
Categorie: prăjituri
<br/>
Subcategorie: prăjituri bucată
</div>
<div id="descriere_produs">
<p>Compozitie:Rulada cu crema de ciocolata, frisca.</p>
<p>Gramaj:180 gr</p>
<p>Pentru torturile standard comenzile se lanseaza cu cel putin 4 ore inainte de ora livrarii.</p>
<p>* Imaginile produselor sunt cu titlu de prezentare; nuantele folosite pentru modele si in paletar sunt orientative si pot varia.</p>
<p>** Figurinele sunt realizate din pasta de zahar care poate contine lapte praf (nu sunt de post); figurinele pot contine elemente necomestibile (scobitori).</p>
<p>*** Pretul decorului se calculeaza pe manopera,gramajul acestuia intra in pretul/kg.</p>
</div>
<hr>

<div id="pret_produs">4.5 lei/buc</div>

<center>
	<form action="../pages/comanda_produs.php" method="post" class="buton_adauga_cos">
	Cantitate: <input type="number" name="cantitate" value="1" min="1" max="1000" /><br/><br/>
	<?php 
	if (isset($_SESSION['utilizator']))
	{	
		//daca este logat un utilizator afisam Adauga in cos si trimitem la server prin post link-ul catre produs si numele produsului
		echo "<input type='hidden' id='produs' name='produs' value='Tiroleza'/>";
		
		echo "<input class='bloc_welcome' type='submit' name='adauga' value='Trimite o comandă'  />";
	?>
	</form>
</center>


</div>
<?php
	}
?>
