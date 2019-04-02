<?PHP
include "../core/sponsorsc.php";
include"../views/sponsors.php";
$sponsors1C=new sponsorsC();
$listesponsors=$sponsors1C->affichersponsors();

//var_dump($listeEmployes->fetchAll());
?>
<div class="right_col" role="main">
      
         
<table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">Nom</th>
     <th width="10%">Type</th>
     <th width="10%">Renverssement</th>
    <th width="10%">Delete</th>
       <th width="10%">Update</th>

    </tr>
  
<?PHP
foreach($listesponsors as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['type']; ?></td>
  <td><?PHP echo $row['renverssement']; ?></td>
   <td><form method="POST" action="supprimersponsors.php">
  <input type="submit" name="delete" class="btn btn-danger bt-xs delete"value="delete">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  </form>
  </td>
         <td><a href="modifiersponsors.php?nom=<?PHP echo $row['nom']; ?>">
  Modifier</a></td>
  </tr>
  </div>
  <?PHP
}
?>
</table>

