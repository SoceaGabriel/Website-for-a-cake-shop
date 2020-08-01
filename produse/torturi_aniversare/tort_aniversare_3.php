<?php 
	include("../../login/logica_login.php");
?>
<div id="pagina_produs">
<h1>&#10036; Tort aniversar alb cu modele circulare</h1>
<hr/>
<div id="poza"><img src="imagini/tort_aniversare_3.jpg" alt="Poza tort aniversar 3" /></div>
<div id="informatii_produs">
Categorie: torturi
<br/>
Subcategorie: torturi aniversare
</div>
<div id="descriere_produs">
<p>Tort alb ornat cu cerculețe din ciocolată. Dă foarte bine vizual, iar cei care il vor manca se vor simți cu adevărat fericiți.</p>
<p>* Imaginile produselor sunt cu titlu de prezentare; nuantele folosite pentru modele si in paletar sunt orientative si pot varia; torturile si figurinele sunt 
executate manual, de aceea pot varia ca reprezentare; colorantul alimentar este solubil si poate colora limba/mainile, este recomandat sa consumati cu prudenta.</p>
<p>** Figurinele sunt realizate din pasta de zahar care poate contine lapte praf (nu sunt de post); figurinele pot contine elemente necomestibile (scobitori).</p>
<p>*** Pretul decorului se calculeaza pe manopera,gramajul acestuia intra in pretul/kg.</p>
</div>
<hr>

<div id="pret_produs">70 lei/kg</div>

<center>
	<form action="../pages/comanda_produs.php" method="post" class="buton_adauga_cos">
	Cantitate: <input type="number" name="cantitate" value="1" min="1" max="1000" /><br/><br/>
	<?php 
	if (isset($_SESSION['utilizator']))
	{	
		//daca este logat un utilizator afisam Adauga in cos si trimitem la server prin post link-ul catre produs si numele produsului
		echo "<input type='hidden' id='produs' name='produs' value='Tort aniversar alb cu modele circulare'/>";
		
		echo "<input class='bloc_welcome' type='submit' name='adauga' value='Trimite o comandă'  />";
	?>
	</form>
</center>


</div>
<?php
	}
?>