<?php 
	include("../../login/logica_login.php");
?>
<div id="pagina_produs">
<h1>&#10036; Tort aniversar cu ciocolata si flori albe</h1>
<hr/>
<div id="poza"><img src="imagini/tort_aniversare_2.jpg" alt="Poza tort aniversar 2" /></div>
<div id="informatii_produs">
Categorie: torturi
<br/>
Subcategorie: torturi aniversare
</div>
<div id="descriere_produs">
<p>Tortul ideal pentru părinți, ormat cu ciocolată si neagră și trandafiri albi. Toți din casă se vor bucura de un așa tort.</p>
<p>* Imaginile produselor sunt cu titlu de prezentare; nuantele folosite pentru modele si in paletar sunt orientative si pot varia; torturile si figurinele sunt 
executate manual, de aceea pot varia ca reprezentare; colorantul alimentar este solubil si poate colora limba/mainile, este recomandat sa consumati cu prudenta.</p>
<p>** Figurinele sunt realizate din pasta de zahar care poate contine lapte praf (nu sunt de post); figurinele pot contine elemente necomestibile (scobitori).</p>
<p>*** Pretul decorului se calculeaza pe manopera,gramajul acestuia intra in pretul/kg.</p>
</div>
<hr>

<div id="pret_produs">65 lei/kg</div>

<center>
	<form action="../pages/comanda_produs.php" method="post" class="buton_adauga_cos">
	Cantitate: <input type="number" name="cantitate" value="1" min="1" max="1000" /><br/><br/>
	<?php 
	if (isset($_SESSION['utilizator']))
	{	
		//daca este logat un utilizator afisam Adauga in cos si trimitem la server prin post link-ul catre produs si numele produsului
		echo "<input type='hidden' id='produs' name='produs' value='Tort aniversar cu ciocolata si flori albe'/>";
		
		echo "<input class='bloc_welcome' type='submit' name='adauga' value='Trimite o comandă'  />";
	?>
	</form>
</center>


</div>
<?php
	}
?>