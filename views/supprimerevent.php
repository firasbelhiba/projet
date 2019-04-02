<?PHP
include "../core/eventc.php";
$eventC=new eventC();
if (isset($_POST["nom"])){
	$eventC->supprimerevent($_POST["nom"]);
	header('Location: afficherevent.php');
}

?>