document.getElementById("ajouter").addEventListner("submit",function(e){e.preventDefault();
var erreur; 
var nom =document.getElementById("nom");
var dated =document.getElementById("dated");
var datef =document.getElementById("datef");
var lieu =document.getElementById("lieu");
var type =document.getElementById("type");
if (!nom.value){
	erreur ="veuillez renseigner un nom"
}
if (!lieu.value){
	erreur ="veuillez renseigner un lieu"
}
if (!type.value){
	erreur ="veuillez renseigner un type"
}
if (erreur){
	e.preventDefault();
	document.getElementById("erreur").innerHTML = erreur;
	return false;
} else { alert ('Formulaire envoyé');}
});
