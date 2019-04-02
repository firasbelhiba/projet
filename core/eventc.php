<?PHP
include "../config.php";
class eventC {
function afficher ($event){
		echo "Nom: ".$event->getNom()."<br>";
		echo "dated: ".$event->getDated()."<br>";
		echo "Datef: ".$event->getDatef()."<br>";
		echo "Lieu: ".$event->getLieu()."<br>";
		echo "Type: ".$event->getType()."<br>";
	}
	
	
	function ajouterevent($event){
		$sql="insert into event (nom,dated,datef,lieu,type) values (:nom, :dated,:datef,:lieu,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$event->getNom();
        $dated=$event->getDated();
        $datef=$event->getDatef();
        $lieu=$event->getLieu();
        $type=$event->getType();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':dated',$dated);
		$req->bindValue(':datef',$datef);
		$req->bindValue(':lieu',$lieu);
		$req->bindValue(':type',$type);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
		function afficherevent(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerevent($nom){
		$sql="DELETE FROM event where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevent($event,$nom){
		$sql="UPDATE event SET nom=:nomm, dated=:datedd,datef=:dateff,lieu=:lieuu,type=:typee WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomm=$event->getNom();
        $dated=$event->getDated();
        $datef=$event->getDatef();
        $lieu=$event->getLieu();
        $type=$event->getType();
		$datas = array(':nomm'=>$nom , ':datedd'=>$dated,':dateff'=>$datef,':lieuu'=>$lieu,':typee'=>$type);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':datedd',$dated);
		$req->bindValue(':dateff',$datef);
		$req->bindValue(':lieuu',$lieu);
		$req->bindValue(':typee',$type);
		
		
          $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		

	}


		function recupererevent($nom){
		$sql="SELECT * from event where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>