<?PHP
include "../core/sponsorsc.php";
$sponsors1C=new sponsorsC();
$listesponsors=$sponsors1C->affichersponsors();

//var_dump($listeEmployes->fetchAll());
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script language="Javascript">
function imprimer(){window.print();}
</script>
</head>
<body>
<form>
<div align="center"><center><p><input name="B1" onclick="imprimer()" type="button"
value="Imprimer"></p>
</center></div>
</form>
</body>
</html>
<table border="2"> 
<p> <a href="afficherevent.php">Retourner<a/></p> 
    <tr>
     <th width="10%">nom</th>
     <th width="10%">type</th>
     <th width="10%">renverssement</th>
     
  

    </tr>
    <?PHP
foreach($listesponsors as $row){
  ?>
  <tr>
<td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['type']; ?></td>
  <td><?PHP echo $row['renverssement']; ?> %</td>
  
 

  </tr>
  <?PHP
}
?>

</table>