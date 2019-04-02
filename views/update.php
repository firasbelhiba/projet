<?php
ob_start();
include "../entities/photo.php";
include "../core/photoCore.php";
include"../views/test.php";

 $connect = mysqli_connect("localhost", "root", "", "ttt3");

    // Check if file was uploaded without errors
if(isset($_POST["id"]))

{    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $photo = new Photo($filename, $filetype, $filesize);
	 $photoCore1 = new PhotoCore();
        $photoCore1->update($photo,$connect,$_FILES["photo"]["tmp_name"],$_POST["id"]);
        header('Location: afficher.php');


    }
  }

?>

          

