<?php
include "../entities/sponsors.php";
include "../core/sponsorsc.php";

if (isset($_POST['nom']) and isset($_POST['type']) and isset($_POST['renverssement'])){
$sponsors1=new sponsors($_POST['nom'],$_POST['type'],$_POST['renverssement']);

$sponsors1C=new sponsorsC();
$sponsors1C->ajoutersponsors($sponsors1);
header('Location: affichersponsors.php');
	
}

?>