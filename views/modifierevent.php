<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/event.php";
include "../core/eventc.php";
	$eventC=new eventC();
    $result=$eventC->recupererevent($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$datedd=$row['dated'];
		$dateff=$row['datef'];
		$lieuu=$row['lieu'];
		$typee=$row['type'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Nom</td>
<td><input type="number" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Dated</td>
<td><input type="date" name="datedd" value="<?PHP echo $datedd ?>"></td>
</tr>
<tr>
<td>Datef</td>
<td><input type="date" name="dateff" value="<?PHP echo $dateff ?>"></td>
</tr>
<tr>
<td>lieu</td>
<td><input type="text" name="lieuu" value="<?PHP echo $lieuu ?>"></td>
</tr>
<tr>
<td>Type</td>
<td><input type="text" name="typee" value="<?PHP echo $typee ?>"></td>
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

if (isset($_POST['modifier'])){
	$event=new event($_POST['nom'],$_POST['datedd'],$_POST['dateff'],$_POST['lieuu'],$_POST['typee']);
	$eventC->modifierevent($event,$_POST['nom_ini']);
	echo $_POST['nom_ini'];
	header('Location: afficherevent.php');
}
?>
</body>
</HTMl>