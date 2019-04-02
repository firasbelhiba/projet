<?php
include "../entities/photo.php";
include "../core/photoCore.php";
include"../views/test.php";
$connect = mysqli_connect("localhost", "root", "", "ttt3");
        $photoCore1 = new PhotoCore();
        $result = $photoCore1->afficherPhoto($connect);
?>
          

   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="70%">Image</th>
     <th width="10%">Change</th>
     <th width="10%">Remove</th>
    </tr>
  
  <?php
  while($row = mysqli_fetch_array($result))
  {
  	?>


    <tr>
     <td><?php echo $row["id"] ; ?></td>
     <td>
      <img src="<?php echo '../upload/'.$row['image']; ?> " height="60" width="75" class="img-thumbnail" />
     </td>
     <td><form action="update.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="photo" id="fileSelect">
      <br><input type="submit" name="update" class="btn btn-warning bt-xs update" value="update">
<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
</form>
    </td>
    <td><form action="delete.php" method="POST">
      <input type="submit" name="delete" class="btn btn-danger bt-xs delete" value="delete">
      <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
     </form>
     </td>
    
    

   
    </tr>
    
   
<?php
  }

    
?>
</table>
