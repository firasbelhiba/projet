
<?PHP
include "../core/eventc.php";
include"../views/event.php";
$event1C=new eventC();
$listeevent=$event1C->afficherevent();

//var_dump($listeEmployes->fetchAll());
?>
       

<div class="right_col" role="main">
      
         
<table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">Nom</th>
     <th width="10%">Dated</th>
     <th width="10%">Datef</th>
     <th width="10%">Lieu</th>
      <th width="10%">Type</th>
    <th width="10%">Delete</th>
       <th width="10%">Update</th>

    </tr>
  
<?PHP
foreach($listeevent as $row){
  ?>
  <tr>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['dated']; ?></td>
  <td><?PHP echo $row['datef']; ?></td>
  <td><?PHP echo $row['lieu']; ?></td>
  <td><?PHP echo $row['type']; ?></td>
   <td><form method="POST" action="supprimerevent.php">
  <input type="submit" name="delete" class="btn btn-danger bt-xs delete"value="delete">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  </form>
  </td>
     <td><a href="modifierevent.php?nom=<?PHP echo $row['nom']; ?>">
  Modifier</a></td>
  </tr>
  </td>
  </tr>
  <?PHP
}
?>
</table>
</div>

