<?PHP
ob_start();
include "../core/photoCore.php";
include"../views/test.php";
 $photoCore1 = new PhotoCore();
if(isset($_POST["id"]))
{
$connect = mysqli_connect("localhost", "root", "", "ttt3");

        $photoCore1->delete($connect,$_POST["id"]);
 	header('Location: afficher.php');
 }
?>
