function validateForm() {

	var email = document.forms["comentForm"]["email"].value;
	var pseudo = document.forms["comentForm"]["pseudo"].value;
	var texte = document.forms["comentForm"]["coment"].value;

	if(email == null || email == "") {
		alert("L'email est obligatoire !");
		return false;
	}
	
	if(pseudo == null || pseudo == "") {
		alert("Le pseudo est obligatoire !");
		return false;
	}
	
	if(texte == null || texte == "") {
		alert("Le commentaire est obligatoire !");
		return false;
	}

}