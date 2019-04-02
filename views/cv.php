<?PHP
include "../core/eventc.php";
$event1C=new eventC();
$listeevent=$event1C->afficherevent();

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
     <th width="10%">dated</th>
     <th width="10%">datef</th>
     <th width="10%">lieu</th>
     <th width="10%">type</th>
  

    </tr>
    <?PHP
foreach($listeevent as $row){
  ?>
  <tr>
<td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['dated']; ?></td>
  <td><?PHP echo $row['datef']; ?> %</td>
  <td><?PHP echo $row['lieu']; ?></td>
   <td><?PHP echo $row['type']; ?></td>
 

  </tr>
  <?PHP
}
?>

</table>