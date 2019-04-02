<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/sponsors.php";
include "../core/sponsorsc.php";
if (isset($_GET['nom'])){
	$sponsorsC=new sponsorsC();
    $result=$sponsorsC->recuperersponsors($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$typee=$row['type'];
		$renverssementt=$row['renverssement'];
		
?>
<form method="POST">
<table>
<caption>Modifier Sponsors</caption>
<tr>
<td>Nom</td>
<td><input type="number" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="typee" value="<?PHP echo $typee ?>"></td>
</tr>
<tr>
<td>Renverssement</td>
<td><input type="number" name="renverssementt" value="<?PHP echo $renverssementt ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="nom_ini" value="<?PHP echo $_GET['nom'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$sponsors=new sponsors($_POST['nom'],$_POST['typee'],$_POST['renverssementt']);
	$sponsorsC->modifiersponsors($sponsors,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: affichersponsors.php');
}
?>
</body>
</HTMl>