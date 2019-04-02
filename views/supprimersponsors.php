<?PHP
include "../core/sponsorsc.php";
$sponsorsC=new sponsorsC();
if (isset($_POST["nom"])){
	$sponsorsC->supprimersponsors($_POST["nom"]);
	header('Location: affichersponsors.php');
}

?>