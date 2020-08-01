/*Fisier JS pentru torturi de nunta*/

/*AJAX Produse*/
function Incarca(ref)
{
	var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("sct").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", ref, true);
	  xhttp.send();
}

/*
function inc() {
	if(window.onload)
	{
		showSlides();
		Incarca('../produse/torturi_nunta/principala.php');
	}
}
*/

window.onload=function(){
		showSlides();
		Incarca('../produse/candy_bar/principala.php');
}