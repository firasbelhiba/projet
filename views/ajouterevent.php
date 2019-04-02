<?PHP
include "../entities/event.php";
include "../core/eventc.php";

if (isset($_POST['nom']) and isset($_POST['dated']) and isset($_POST['datef']) and isset($_POST['lieu']) and isset($_POST['type'])){
$event1=new event($_POST['nom'],$_POST['dated'],$_POST['datef'],$_POST['lieu'],$_POST['type']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$condition = true;
$dated = $_POST['dated'];
$datef = $_POST['datef'];
if($dated > $datef)$condition = false;
if($condition==true)
{
	$event1C=new eventC();
	$event1C->ajouterevent($event1);
	header('Location: afficherevent.php');
}
else echo "champs non validés veuillez saisir la date comme explique le texte suivant : ";
 
     echo " la date de debut doit etre inferieur a la date de la fin pour completer le formulaire";
      ?>
     <p><a href="afficherevent.php">Retourner<a/></p>
	<?PHP

}
//*/

?>