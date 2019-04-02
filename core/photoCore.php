<?php
// Check if the form was submitted
class PhotoCore {

    function ajouterPhoto($photo,$connect, $temp_name) {

        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $photo->getNom();
        $filetype = $photo->getType();
        $filesize = $photo->getSize();
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($temp_name, "../upload/" . $filename);
                $query = "INSERT INTO file_img (image) VALUES ('$filename')";
  				if(mysqli_query($connect, $query)){
                echo "Your file was uploaded successfully.";
                }
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
}



function afficherphoto($connect){

 $query = "SElECT * From file_img";
 try{
       $result=mysqli_query($connect, $query);
                return $result;
        }
                
 catch (Exception $e){
            die('Erreur:');
        }   

    }

function delete($connect, $id){
    $query = "DELETE FROM file_img  WHERE id = '$id'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }


function update($photo,$connect,$temp_name,$id)
{
      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $photo->getNom();
        $filetype = $photo->getType();
        $filesize = $photo->getSize();
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("../upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($temp_name, "../upload/" . $filename);
               $query = "UPDATE file_img SET image ='$filename' WHERE id = '$id'";
                if(mysqli_query($connect, $query)){
                echo "Your file was uploaded successfully.";
                }
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
}


}
?>